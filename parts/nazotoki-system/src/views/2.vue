<template>
  <div class="inner">
    <div class="q-img-wrap">
      <img :src="imgPath" alt="" v-if="imgShow">
      <img src="../assets/fraud.png" alt="" v-else>
    </div>
  </div>
</template>

<script>
export default {
  name: 'page2',
  data() {
    return {
      imgPath: this.$parent.answerList[2].imgPath,
      imgShow: false
    }
  },
  created: function(){
    this.$parent.prevPage = 1
    this.$parent.nowPage = 2
    if(this.$parent.nowPage <= this.$store.getters.lastCorrect){
      this.imgShow = true
    }
  }
}
</script>
