<!-- The form in this component is using http://element.eleme.io/#/en-US/component/form -->

<template>
  <div class="container">

    <el-form label-position="left" :model="ruleForm2" status-icon :rules="rules2" ref="ruleForm2" label-width="120px" class="login-form">
      <el-form-item label="你的名字" prop="name">
        <el-input v-model="ruleForm2.name"></el-input>
      </el-form-item>
      <el-form-item label="电邮" prop="email">
        <el-input v-model="ruleForm2.email"></el-input>
      </el-form-item>
      <el-form-item label="标题" prop="title">
        <el-input v-model="ruleForm2.title"></el-input>
      </el-form-item>
      <el-form-item label="内容" prop="content">
        <el-input type="textarea" v-model="ruleForm2.content"></el-input>
      </el-form-item>
      <el-form-item>
        <el-button type="primary" @click="submitForm('ruleForm2')">提交</el-button>
        <el-button @click="resetForm('ruleForm2')">重置</el-button>
      </el-form-item>
    </el-form>

  </div>
  </template>

<script>
  import axios from 'axios'



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
          name: '',
          email: '',
          title: '',
          content: ''
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
          name: [
            { validator: validateBlank, trigger: 'blur' }
          ],
          email: [
            { validator: validateBlank, trigger: 'blur' }
          ],
          title: [
            { validator: validateBlank, trigger: 'blur' }
          ],
          content: [
            { validator: validateBlank, trigger: 'blur' }
          ],
        }
      };
    },
    methods: {
      submitForm(formName) {
        this.$refs[formName].validate((valid) => {
          if (valid) {
            axios.post('api/sendemail', {
              content: '名字:' + this.ruleForm2.name + '\n' +
                        '标题:' + this.ruleForm2.title + '\n' +
                        '电邮:' + this.ruleForm2.email + '\n' +
                        '内容:\n' + this.ruleForm2.content
            })
              .then(function (response) {
                alert('成功提交，我们会尽快回复。')
              })
              .catch(function (error) {
                console.log(error)
              })
            this.$refs[formName].resetFields()
          } else {
            alert('错误, 请电邮至 sgclreadingcompetition@gmail.com')
            return false
          }
        })
        this.$router.push('/')
      },
      resetForm(formName) {
        this.$refs[formName].resetFields();
      }
    }
  }
</script>

<style>
  @media (min-width: 800px){
    .login-form{
      margin: 10%;
      margin-right: 50%;
    }
    .container{
      padding-bottom: 100px;
    }
  }

  @media (min-width: 0px) and (max-width: 799px){
    .login-form{
      margin: 10%;
      margin-right: 10%;
    }
    .container{
      padding-bottom: 150px;
    }
  }

</style>
