$(function(){
	const $header = $('header');
	const $headerNav = $('header nav');
	const $headerBg = $('header #js-nav-bg');
	var $headerHight = 66; //ヘッダの高さ
	var $headerPosi = 40;
	var $windowWidth;

	// 画面サイズ別設定
	$(window).on('load resize', function() {
		$windowWidth = $(window).width();
		if($windowWidth > 640){
			$headerHight = 66;
			$headerPosi = 40;
		}else{
			$headerHight = $header.outerHeight();
			$headerPosi = $windowWidth * 0.103;
			// ヘッダーがfixed状態ではない場合、変数をfixed時の高さに調整
			if($(window).scrollTop() <= $headerPosi){
				$headerHight = $headerHight * 0.8;
			}
		}
	});

	// スマートフォンナビゲーション
	var navChange = function(){
		if($headerNav.hasClass('open')){
			$headerNav.removeClass('open');
			$headerBg.fadeOut();
		}else{
			$headerNav.addClass('open');
			$headerBg.fadeIn();
		}
	}
	$('#js-nav-open').click(function() {
		navChange();
	});
	$('#js-nav-close').click(function() {
		navChange();
	});
	$headerBg.click(function() {
		navChange();
	});

	// スクロール別処理
	$(window).on('load scroll',function(){
		if($(window).scrollTop() > $headerPosi){
			$header.addClass('fixed');
		}
		else{
			$header.removeClass('fixed');
		}
	});

	// #で始まるリンクをクリックしたら実行されます
	$('a[href^="#"]').click(function() {
		var speed = 400; // スクロールの速度　ミリ秒で記述
		var $href= $(this).attr("href");
		var $target = $($href == "#" || $href == "" ? 'html' : $href);
		var $position = $target.offset().top-$headerHight;
		$('body,html').animate({scrollTop:$position}, speed, 'swing');
		return false;
	});
});
