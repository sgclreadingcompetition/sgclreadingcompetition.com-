<template>
  <div class="drawer">
    <el-form v-if="login==false" label-position="left" :model="ruleForm2" status-icon :rules="rules2" ref="ruleForm2" label-width="120px" class="login-form">
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
    <div v-if="login==true" class="question-holder">
      <el-tabs type="card">
        <el-tab-pane label="初赛说明">
          <br>
          <p>1、参赛者/小组须于2018年3月1日至3月15日期间，完成以下三部分的题目：</p>
          <p>     一、小说         ：共20道选择题 + 1道开放题</p>
          <p>     二、散文(任选一本)：共10道选择题 + 1道开放题</p>
          <p>     三、小说         ：共10道选择题 + 1道开放题</p>
          <br>
          <p>2、作答完毕，参赛者/小组可选择"储存答案"或"提交答案"。</p>
          <br>
        </el-tab-pane>
        <el-tab-pane label="小说">
          <div v-for="(question,index) in questions">
            <div v-if="question.category == 'novel'">
              {{index+1}}.  {{question.content}}<br>
              <div v-if="question.type == 'MCQ'">
                <el-radio v-if="question.choiceA != null" label="A" v-model="answers[index]">{{question.choiceA}}</el-radio><br>
                <el-radio v-if="question.choiceB != null" label="B" v-model="answers[index]">{{question.choiceB}}</el-radio><br>
                <el-radio v-if="question.choiceC != null" label="C" v-model="answers[index]">{{question.choiceC}}</el-radio><br>
                <el-radio v-if="question.choiceD != null" label="D" v-model="answers[index]">{{question.choiceD}}</el-radio><br>
                <el-radio v-if="question.choiceE != null" label="E" v-model="answers[index]">{{question.choiceE}}</el-radio><br>
                <el-radio v-if="question.choiceF != null" label="F" v-model="answers[index]">{{question.choiceF}}</el-radio><br>
                <el-radio v-if="question.choiceG != null" label="G" v-model="answers[index]">{{question.choiceG}}</el-radio><br>
              </div>
              <div v-if="question.type == 'SA'">
                <el-input
                  type="textarea"
                  :rows="2"
                  maxlength=250
                  placeholder="答案以250字为限。"
                  v-model="answers[index]">
                </el-input>
                <br>
                <br>
              </div>
            </div>
          </div>
        </el-tab-pane>
        <el-tab-pane label="散文">
          只需选择并完成其中一本书的题目：
          <el-switch
            style="display: block"
            v-model="essay"
            active-color="#87ceeb"
            inactive-color="#87ceeb"
            active-text="《亮光》"
            inactive-text="《半世纪前的新加坡》">
          </el-switch>
          <br>


          <div v-for="(question,index) in questions">
            <div v-if="question.category == 'essay'">
              {{index+1}}.  {{question.content}}<br>
              <div v-if="question.type == 'MCQ'">
                <el-radio :disabled="essay == true" v-if="question.choiceA != null" label="A" v-model="answers[index]">{{question.choiceA}}</el-radio><br>
                <el-radio :disabled="essay == true" v-if="question.choiceB != null" label="B" v-model="answers[index]">{{question.choiceB}}</el-radio><br>
                <el-radio :disabled="essay == true" v-if="question.choiceC != null" label="C" v-model="answers[index]">{{question.choiceC}}</el-radio><br>
                <el-radio :disabled="essay == true" v-if="question.choiceD != null" label="D" v-model="answers[index]">{{question.choiceD}}</el-radio><br>
                <el-radio :disabled="essay == true" v-if="question.choiceE != null" label="E" v-model="answers[index]">{{question.choiceE}}</el-radio><br>
                <el-radio :disabled="essay == true" v-if="question.choiceF != null" label="F" v-model="answers[index]">{{question.choiceF}}</el-radio><br>
                <el-radio :disabled="essay == true" v-if="question.choiceG != null" label="G" v-model="answers[index]">{{question.choiceG}}</el-radio><br>
              </div>
              <div v-if="question.type == 'SA'">
                <el-input
                  type="textarea"
                  :disabled="essay == true"
                  :rows="2"
                  maxlength=250
                  placeholder="答案以250字为限。"
                  v-model="answers[index]">
                </el-input>
                <br>
                <br>
              </div>
            </div>
            <div v-if="question.category == 'essay1'">
              {{index+1}}.  {{question.content}}<br>
              <div v-if="question.type == 'MCQ'">
                <el-radio :disabled="essay == false" v-if="question.choiceA != null" label="A" v-model="answers[index]">{{question.choiceA}}</el-radio><br>
                <el-radio :disabled="essay == false" v-if="question.choiceB != null" label="B" v-model="answers[index]">{{question.choiceB}}</el-radio><br>
                <el-radio :disabled="essay == false" v-if="question.choiceC != null" label="C" v-model="answers[index]">{{question.choiceC}}</el-radio><br>
                <el-radio :disabled="essay == false" v-if="question.choiceD != null" label="D" v-model="answers[index]">{{question.choiceD}}</el-radio><br>
                <el-radio :disabled="essay == false" v-if="question.choiceE != null" label="E" v-model="answers[index]">{{question.choiceE}}</el-radio><br>
                <el-radio :disabled="essay == false" v-if="question.choiceF != null" label="F" v-model="answers[index]">{{question.choiceF}}</el-radio><br>
                <el-radio :disabled="essay == false" v-if="question.choiceG != null" label="G" v-model="answers[index]">{{question.choiceG}}</el-radio><br>
              </div>
              <div v-if="question.type == 'SA'">
                <el-input
                  type="textarea"
                  :disabled="essay == false"
                  :rows="2"
                  maxlength=250
                  placeholder="答案以250字为限。"
                  v-model="answers[index]">
                </el-input>
                <br>
                <br>
              </div>
            </div>
          </div>
        </el-tab-pane>
        <el-tab-pane label="诗歌">
          <div v-for="(question,index) in questions">
            <div v-if="question.category == 'poem'">
              {{index+1}}.  {{question.content}}<br>
              <div v-if="question.type == 'MCQ'">
                <el-radio v-if="question.choiceA != null" label="A" v-model="answers[index]">{{question.choiceA}}</el-radio><br>
                <el-radio v-if="question.choiceB != null" label="B" v-model="answers[index]">{{question.choiceB}}</el-radio><br>
                <el-radio v-if="question.choiceC != null" label="C" v-model="answers[index]">{{question.choiceC}}</el-radio><br>
                <el-radio v-if="question.choiceD != null" label="D" v-model="answers[index]">{{question.choiceD}}</el-radio><br>
                <el-radio v-if="question.choiceE != null" label="E" v-model="answers[index]">{{question.choiceE}}</el-radio><br>
                <el-radio v-if="question.choiceF != null" label="F" v-model="answers[index]">{{question.choiceF}}</el-radio><br>
                <el-radio v-if="question.choiceG != null" label="G" v-model="answers[index]">{{question.choiceG}}</el-radio><br>
              </div>
              <div v-if="question.type == 'SA'">
                <el-input
                  type="textarea"
                  :rows="2"
                  maxlength=250
                  placeholder="答案以250字为限。"
                  v-model="answers[index]">
                </el-input>
                <br>
                <br>
              </div>
            </div>
          </div>
        </el-tab-pane>
        <el-tab-pane label="提交答案">
          <el-button type="primary" @click="saveAnswer">储存答案</el-button>
          <el-button type="primary" @click="dialogVisible = true">提交答案</el-button>
        </el-tab-pane>
      </el-tabs>
    </div>

    <el-dialog
      title="您确定要提交答案吗？"
      :visible.sync="dialogVisible"
      width="30%">
      <span>您确定要提交答案吗？请在提交前检查好答案，答案只能提交一次，提交后您将不能再次登陆。</span>
      <span slot="footer" class="dialog-footer">
    <el-button @click="dialogVisible = false">取消</el-button>
    <el-button type="primary" @click="dialogVisible = false; submitAnswer()">确定提交</el-button>
  </span>
    </el-dialog>



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
          callback()
        }
      }
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
      }
      var validatePass = (rule, value, callback) => {
        if (value === '') {
          callback(new Error('Please input the password'));
        } else {
          if (this.ruleForm2.checkPass !== '') {
            this.$refs.ruleForm2.validateField('checkPass');
          }
          callback();
        }
      }
      var validatePass2 = (rule, value, callback) => {
        if (value === '') {
          callback(new Error('Please input the password again'));
        } else if (value !== this.ruleForm2.pass) {
          callback(new Error('Two inputs don\'t match!'));
        } else {
          callback();
        }
      }
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
        },
        token: null,
        login: false,
        answers: [],
        questions: null,
        essay: false,
        dialogVisible: false
      }
    },
    watch: {
      login: function () {
        var axiosQuestion = axios.create({
          baseURL: 'http://sgclreadingcompetition.com/api/question',
          headers: {'Content-Type': 'application/json',
            'Authorization': 'Bearer ' + this.token}
        })
        axiosQuestion.get('http://sgclreadingcompetition.com/api/question')
          .then(response => {
            this.questions = response.data.questions
            console.log(response.data.questions)
            if (response.data.questions == null || response.data.submitted === 1) {
              alert('您已提交答案，不能再次提交。')
              this.$router.push({name: 'Home'})
              return false
            }
        }).catch(error => {
          if (error.response.status === 499 || this.questions === null) {
            alert('您已提交答案，不能再次提交。')
            this.$router.push({name: 'Home'})
            return false
          } else {
            alert('get question error')
          }
        })
        var axiosAns = axios.create({
          baseURL: 'http://sgclreadingcompetition.com/api/answer',
          headers: {'Content-Type': 'application/json',
            'Authorization': 'Bearer ' + this.token}
        })
        axiosAns.get('http://sgclreadingcompetition.com/api/answer')
          .then(response => {
            this.answers = response.data.answers
            this.essay = response.data.essay
          }).catch(error => {
            console.log(error)
        })
      }
    },
    methods: {
      saveAnswer () {
        var instance = axios.create({
          baseURL: 'http://sgclreadingcompetition.com/api/answer',
          headers: {'Content-Type': 'application/json',
            'Authorization': 'Bearer ' + this.token}
        })
        instance.post('http://sgclreadingcompetition.com/api/answer', {
          answers: this.answers,
          submitted: 0,
          essay: this.essay
        }).then(response => {
          alert('储存成功')
        }).catch(response => {
          alert('submit error')
        })
      },
      submitAnswer () {
        if (this.essay === false){
          var i;
          for (i = 0; i < 33; i++) {
            if(this.answers[i - 1] === null) {
              alert('您还没作答第' + i + '题，请答完所有题目。')
              return false
            }
            if (i === 21 || i === 32) {
              if (this.answers[i - 1].length < 10) {
                alert('您的第' + i + '道开放题字数少于10个字，无法提交。')
                return false
              }
            }
          }
          for (i = 44; i < 55; i++) {
            if(this.answers[i - 1] === null) {
              alert('您还没作答第' + i + '题，请答完所有题目。')
              return false
            }
            if (i === 54) {
              if (this.answers[i - 1].length < 10) {
                alert('您的第' + i + '道开放题字数少于10个字，无法提交。')
                return false
              }
            }
          }
        } else {
          for (i = 0; i < 22; i++) {
            if(this.answers[i - 1] === null) {
              alert('您还没作答第' + i + '题，请答完所有题目。')
              return false
            }
            if (i === 21 || i === 43) {
              if (this.answers[i - 1].length < 10) {
                alert('您的第' + i + '道开放题字数少于10个字，无法提交。')
                return false
              }
            }
          }
          for (i = 33; i < 55; i++) {
            if(this.answers[i - 1] === null) {
              alert('您还没作答第' + i + '题，请答完所有题目。')
              return false
            }
            if (i === 54) {
              if (this.answers[i - 1].length < 10) {
                alert('您的第' + i + '道开放题字数少于10个字，无法提交。')
                return false
              }
            }
          }
        }
        var instance = axios.create({
          baseURL: 'http://sgclreadingcompetition.com/api/answer',
          headers: {'Content-Type': 'application/json',
            'Authorization': 'Bearer ' + this.token}
        })
        instance.post('http://sgclreadingcompetition.com/api/answer', {
          answers: this.answers,
          submitted: 1,
          essay: this.essay
        }).then(response => {
          alert('成功提交')
          this.$router.push({name: 'Home'})
        }).catch(response => {
          alert('submit error')
        })
      },
      submitForm (formName) {
        var instance = axios.create({
          baseURL: 'http://sgclreadingcompetition.com/oauth/token',
          headers: {'Content-Type': 'application/json'}
        })
        instance.post('http://sgclreadingcompetition.com/oauth/token', {
          client_id: 2,
          client_secret: 'TLmmwkTPJ3o7Ss8TIxn1U4uuIKYTBVkFcIHTwCTL',
          username: this.ruleForm2.email,
          password: this.ruleForm2.pass,
          grant_type: 'password'
        }).then(response => {
          if (response.status === 200) {
            console.log(response.status)
            this.token = response.data.access_token
            this.login = true
          } else {
            alert('password error!')
          }
        }).catch(response => {
          alert('password error')
        })
      },
      resetForm(formName) {
        this.$refs[formName].resetFields()
      }
    }
  }
</script>

<style scoped>
  .question-holder{
    margin: 10%;
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
