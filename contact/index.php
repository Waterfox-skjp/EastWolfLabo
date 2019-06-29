<!DOCTYPE html>
<html lang="ja">
<head>
<?php
	$title = 'Contact';
	include_once($_SERVER['DOCUMENT_ROOT'] . '/include/head.php');
?>
</head>
<body class="contact">
	<div class="wrap">
		<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/include/header.php'); ?>
		<main>
			<div id="js-main-visual" class="main-visual">
				<h1 class="page-title">CONTACT</h1>
				<div class="bottom-scroll">
					<a href="#anchor-contents">
						<div class="icon-mouse"></div>
						<span>SCROll</span>
					</a>
				</div>
			</div>
			<div id="anchor-contents" class="contact-detail">
				<div class="inner-wrap">
					<section>
						<h2>お問い合わせ</h2>
						<p>お問い合わせは以下よりお願い致します。</p>
						<ul class="contact-list">
							<li class="mail"><a href="mailto:east.wolf.laboratory@gmail.com">east.wolf.laboratory@gmail.com</a></li>
							<li class="web"><a href="http://eastwolflabo.rw.xsi.jp/">http://eastwolflabo.rw.xsi.jp/</a></li>
						</ul>
					</section>
				</div>
			</div>
		</main>
		<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/include/footer.php'); ?>
	</div>
<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/include/script.php'); ?>
</body>
</html>
