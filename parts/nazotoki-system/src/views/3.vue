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
  name: 'page3',
  data() {
    return {
      imgPath: this.$parent.answerList[3].imgPath,
      imgShow: false
    }
  },
  created: function(){
    this.$parent.prevPage = 2
    this.$parent.nowPage = 3
    if(this.$parent.nowPage <= this.$store.getters.lastCorrect){
      this.imgShow = true
    }
  }
}
</script>
