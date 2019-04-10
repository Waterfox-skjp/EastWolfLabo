$(function(){
  const $header = $('header');
  var $headerHight = 64; //ヘッダの高さ
  var $windowWidth;
  $(window).on('load resize', function() {
    $windowWidth = $(window).width();
    if($windowWidth > 640){
      $headerHight = 64;
    }else{
      $headerHight = $header.height();
    }
  });
  $(window).on('load scroll',function(){
    if($(window).scrollTop() > 40){
      $header.addClass('fixed');   
    }
    else{
      $header.removeClass('fixed');   
    }
  });
  // #で始まるリンクをクリックしたら実行されます
  $('a[href^="#"]').click(function() {
    // スクロールの速度
    var speed = 400; // ミリ秒で記述
    var $href= $(this).attr("href");
    var $target = $($href == "#" || $href == "" ? 'html' : $href);
    var $position = $target.offset().top-$headerHight;
    $('body,html').animate({scrollTop:$position}, speed, 'swing');
    return false;
  });
});
