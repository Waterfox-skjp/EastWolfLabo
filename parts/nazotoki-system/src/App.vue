<template>
  <div id="app">
    <div id="wrap">
      <header></header>
      <main>        
        <div class="question-area">
          <transition name="fade" mode="out-in">
            <router-view/>
          </transition>
        </div>
        <div class="answer-area">
          <div class="inner">
            <form @submit.prevent="submitData">
              <input type="text" placeholder="Answer" v-model="answer"/>
              <button type="submit">Submit</button>
            </form>
          </div>
        </div>
        <div class="navigation-area">
          <div class="inner">
            <p v-if="nowPage != 0" class="btn-prev">
              <router-link to="/" v-if="nowPage == 1">
                前の問題に戻る
              </router-link>
              <router-link :to="'/' +  prevPage + '/'" v-else>
                前の問題に戻る
              </router-link>
            </p>
          </div>
        </div>
      </main>
      <footer>
        <div class="inner">
          <p>© 2014 - 2019 EastWolfLaboratory All Rights Reserved. </p>
        </div>
      </footer>
    </div>
  </div>
</template>

<script>
import answerList from '@/assets/answer.json'

export default {
  name: 'Question',
  data(){
    return {
      answer: '',
      answerList: answerList,
      nowPage: 0,
      prevPage: 0
    }
  },
  methods: {
    submitData(){
      if(this.answer != ""){
        if(this.answer == this.answerList[this.nowPage].answer){
          if(window.confirm('正解です！\n次の問題を表示しますか？')){
            var nextPage = this.nowPage
            nextPage++
            this.$store.commit('correctAdd', nextPage)
            this.$router.push({ path: '/' + nextPage + '/' })
            this.answer = ""
          }
        }else{
          alert('不正解です')
        }
      }else{
        alert('答えを入力してください')
      }
    }
  }
}
</script>

<style lang="scss">
/* roboto-regular - latin */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: url('./assets/fonts/roboto-v19-latin-regular.eot'); /* IE9 Compat Modes */
  src: local('Roboto'), local('Roboto-Regular'),
       url('./assets/fonts/roboto-v19-latin-regular.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('./assets/fonts/roboto-v19-latin-regular.woff2') format('woff2'), /* Super Modern Browsers */
       url('./assets/fonts/roboto-v19-latin-regular.woff') format('woff'), /* Modern Browsers */
       url('./assets/fonts/roboto-v19-latin-regular.ttf') format('truetype'), /* Safari, Android, iOS */
       url('./assets/fonts/roboto-v19-latin-regular.svg#Roboto') format('svg'); /* Legacy iOS */
}
/* roboto-700 - latin */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: url('./assets/fonts/roboto-v19-latin-700.eot'); /* IE9 Compat Modes */
  src: local('Roboto Bold'), local('Roboto-Bold'),
       url('./assets/fonts/roboto-v19-latin-700.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('./assets/fonts/roboto-v19-latin-700.woff2') format('woff2'), /* Super Modern Browsers */
       url('./assets/fonts/roboto-v19-latin-700.woff') format('woff'), /* Modern Browsers */
       url('./assets/fonts/roboto-v19-latin-700.ttf') format('truetype'), /* Safari, Android, iOS */
       url('./assets/fonts/roboto-v19-latin-700.svg#Roboto') format('svg'); /* Legacy iOS */
}

/* roboto-slab-regular - latin */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 400;
  src: url('./assets/fonts/roboto-slab-v8-latin-regular.eot'); /* IE9 Compat Modes */
  src: local('Roboto Slab Regular'), local('RobotoSlab-Regular'),
       url('./assets/fonts/roboto-slab-v8-latin-regular.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('./assets/fonts/roboto-slab-v8-latin-regular.woff2') format('woff2'), /* Super Modern Browsers */
       url('./assets/fonts/roboto-slab-v8-latin-regular.woff') format('woff'), /* Modern Browsers */
       url('./assets/fonts/roboto-slab-v8-latin-regular.ttf') format('truetype'), /* Safari, Android, iOS */
       url('./assets/fonts/roboto-slab-v8-latin-regular.svg#RobotoSlab') format('svg'); /* Legacy iOS */
}
/* roboto-slab-700 - latin */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 700;
  src: url('./assets/fonts/roboto-slab-v8-latin-700.eot'); /* IE9 Compat Modes */
  src: local('Roboto Slab Bold'), local('RobotoSlab-Bold'),
       url('./assets/fonts/roboto-slab-v8-latin-700.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('./assets/fonts/roboto-slab-v8-latin-700.woff2') format('woff2'), /* Super Modern Browsers */
       url('./assets/fonts/roboto-slab-v8-latin-700.woff') format('woff'), /* Modern Browsers */
       url('./assets/fonts/roboto-slab-v8-latin-700.ttf') format('truetype'), /* Safari, Android, iOS */
       url('./assets/fonts/roboto-slab-v8-latin-700.svg#RobotoSlab') format('svg'); /* Legacy iOS */
}

html, body, header, main, aside, footer, section, article, nav,
h1, h2, h3, h4, h5, h6,
table, caption, tbody, tfoot, thead, tr, th, td, form,
figcaption, figure,
div, ul, ol, li, dl, dt, dd, p, a, span,
small, strong, sub, sup {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

body {
  font-family: 'Roboto', Arial, serif;
  font-size: 62.5%;
  color: #FFF;
  background: url(./assets/bg.png);
}

header, main, aside, nav, footer, section, article { display: block; }

h1, h2, h3, h4, h5, h6 {
	line-height: 1;
  font-family: "Roboto Slab", Arial, sans-serif;
	font-weight: normal;
}

table {
	border-collapse: collapse;
	border-spacing: 0;
}

th, td { text-align: left; }

ul, ol, li { list-style: none; }

a { text-decoration: none; }

p { font-size: 18px; }

header {
  background: #2B3F57;
}

footer {
  margin-top: auto;
  padding: 40px 0;
  color: rgb(101,104,110);
  background: #222831;
  p {
    font-size: 16px;
    text-align: center;
  }
}

#wrap {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}

.inner {
  margin: 0 auto;
  padding: 0 20px;
  width: 100%;
  max-width: 1040px;
}

.question-area {
  padding: 40px 0;
  .note-box { margin-bottom: 40px; padding-top: 40px; position: relative;
    h2 {
      padding: 0 20px;
      border-radius: 5px 5px 0 0;
      display: flex;
      align-items: center;
      position: absolute;
      top: 0;
      left: 0;
      height: 40px;
      color: #1E242D;
      background: #FFF;
      font-size: 18px;
      &:before {
        margin-right: .3em;
        content: "\f05a";
        font-family: "Font Awesome 5 Free";
        font-weight: 700;
      }
    }
    .note-list {
      padding: 20px;
      border: 1px solid #FFF;
      border-radius: 0 5px 5px 5px;
      font-size: 18px;
      li { padding-left: 1.2em; position: relative;
        &:before { position: absolute; left: 0; content: "・"; }
      }
    }
  }
  .warning-box {
    margin-bottom: 40px;
    padding: 20px 20px 20px 80px;
    position: relative;
    color: #C00000;
    border: 1px solid #C00000;
    border-radius: 5px;
    &:before {
      display: block;
      position: absolute;
      top: 50%;
      left: 20px;
      content: "\f071";
      font-family: "Font Awesome 5 Free";
      font-size: 32px;
      font-weight: 700;
      transform: translateY(-50%);
    }
  }
  .q-img-wrap {
    position: relative;
    line-height: 0;
    &:after {
      position: absolute;
      top: 0;
      left: 0;
      z-index: 5;
      width: 100%;
      height: 100%;
      content: "";
    }
  }
  img {
    margin: 0 auto;
    display: block;
    width: 100%;
    max-width: 740px;
  }
}

.fade-enter-active, .fade-leave-active {
  transition: opacity .5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}

.answer-area {
  padding: 40px 0;
  position: relative;
  &:after {
    margin: 0 auto;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    display: block;
    width: calc(100% - 40px);
    max-width: 1000px;
    height: 1px;
    content: "";
    background: #5c6065;
  }
  form {
    margin: 0 auto;
    display: flex;
    width: 100%;
    max-width: 700px;
    input {
      padding: 1em .5em;
      border: 1px solid transparent;
      border-radius: 5px;
      display: block;
      flex: 1;
      font-size: 18px;
      transition: .1s;
      &:focus {
        border-color: #2FA6DE;
        box-shadow: 0 0 5px 1px rgba(47, 166, 222,.5);
      }
    }
    button {
      margin-left: 20px;
      padding: 0;
      border: 2px solid #2FA6DE;
      border-radius: 5px;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 160px;
      color: #2FA6DE;
      background: transparent;
      font-size: 22px;
      transition: .3s;
      text-align: center;
      cursor: pointer;
      &:before {
        margin-right: .5em;
        content: "\F1D8";
        font-family: "Font Awesome 5 Free";
        font-weight: 400;
      }
      &:focus { outline: none; }
      &:hover { color: #FFF; background: #2FA6DE; }
    }
  }
}
.navigation-area { padding: 40px 0;
  .btn-prev {
    width: 200px;
    text-align: center;
    a {
      border: 1px solid #CCC;
      border-radius: 5px;
      padding: .5em 1em;
      display: block;
      color: #CCC;
      transition: .3s;
      &:before {
        margin-right: .3em;
        content: "\f053";
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
      }
      &:hover { border-color: #2FA6DE; color: #2FA6DE; }
    }
  }
}
</style>
