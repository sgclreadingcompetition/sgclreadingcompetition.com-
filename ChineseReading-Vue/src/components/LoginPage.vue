<!-- The form in this component is using http://element.eleme.io/#/en-US/component/form -->

<template>
  <div class="drawer">
    <el-form label-position="left" :model="ruleForm2" status-icon :rules="rules2" ref="ruleForm2" label-width="120px" class="login-form">
      <el-form-item label="电邮" prop="email">
        <el-input v-model="ruleForm2.email"></el-input>
      </el-form-item>
      <el-form-item label="密码" prop="pass">
        <el-input type="password" v-model="ruleForm2.pass" auto-complete="off"></el-input>
      </el-form-item>
      <el-form-item>
        <el-button type="primary" @click="submitForm('ruleForm2')">登入</el-button>
        <el-button @click="resetForm('ruleForm2')">重置</el-button>
      </el-form-item>
    </el-form>
  </div>
  </template>

<script>
  import axios from 'axios';

  export default {
    data() {
      var validateBlank = (rule, value, callback) => {
        if (value === '') {
          callback(new Error('Cannot be blank'));
        } else {
          callback();
        }
      };
      var checkAge = (rule, value, callback) => {
        if (!value) {
          return callback(new Error('Please input the age'));
        }
        setTimeout(() => {
          if (!Number.isInteger(value)) {
            callback(new Error('Please input digits'));
          } else {
            if (value < 18) {
              callback(new Error('Age must be greater than 18'));
            } else {
              callback();
            }
          }
        }, 1000);
      };
      var validatePass = (rule, value, callback) => {
        if (value === '') {
          callback(new Error('Please input the password'));
        } else {
          if (this.ruleForm2.checkPass !== '') {
            this.$refs.ruleForm2.validateField('checkPass');
          }
          callback();
        }
      };
      var validatePass2 = (rule, value, callback) => {
        if (value === '') {
          callback(new Error('Please input the password again'));
        } else if (value !== this.ruleForm2.pass) {
          callback(new Error('Two inputs don\'t match!'));
        } else {
          callback();
        }
      };
      return {
        ruleForm2: {
          pass: '',
          checkPass: '',
          age: '',
          email: ''
        },
        rules2: {
          pass: [
            { validator: validatePass, trigger: 'blur' }
          ],
          checkPass: [
            { validator: validatePass2, trigger: 'blur' }
          ],
          age: [
            { validator: checkAge, trigger: 'blur' }
          ],
          email: [
            { validator: validateBlank, trigger: 'blur' }
          ]
        }
      };
    },
    methods: {
      submitForm(formName) {
        this.$refs[formName].validate((valid) => {
          if (valid) {
            var data = {
              client_id: 2,
              client_secret: 'TLmmwkTPJ3o7Ss8TIxn1U4uuIKYTBVkFcIHTwCTL',
              username: this.email,
              password: this.password,
              grant_type: 'passport'
            }
            axios.post('http://localhost/oauth/token', {
              body: data,
              headers: {
                'Content-Type': 'application/json'
              }
            }).then(response => {
              console.log(this.email + this.password)
              console.log('submit~~')
            })
          } else {
            console.log('error submit!!')
            return false;
          }
        })
      },
      resetForm(formName) {
        this.$refs[formName].resetFields()
      }
    }
  }
</script>

<style scoped>
  .drawer{

  }

  @media (min-width: 800px){
    .login-form{
      margin: 10%;
      margin-right: 50%;
    }
  }

  @media (min-width: 0px) and (max-width: 799px){
    .login-form{
      margin: 10%;
      margin-right: 10%;
    }
  }

</style>
