<template>
  <div class="inner">
    <div class="note-box">
      <h2>注意</h2>
      <ul class="note-list">
        <li>解答は漢字・ひらがな・英大文字・英小文字・数字とさまざまです。注意しましょう。</li>
        <li>ヒントを得ようとしてソースを見てしまうと、夢から覚めてしまいます。不正はやめましょう。</li>
        <li>ガラパゴスケータイには対応していない為、PC・スマートフォン・タブレットからご参加ください。</li>
      </ul>
    </div>
    <p class="warning-box">当サイトに掲載されている謎本体や謎画像の著作権は謎製作者及び東狼研究所に帰属します。<br>これらの無断転載はおやめいただきますよう、よろしくお願い致します。</p>
    <div class="q-img-wrap">
      <img src="/img/test.png" alt="">
    </div>
  </div>
</template>

<script>
export default {
  name: 'page0',
  created: function(){
    this.$parent.nowPage = 0
  }
}
</script>
