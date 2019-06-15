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

<style lang="scss">
.question-area {
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
    font-weight: bold;
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
}
</style>

