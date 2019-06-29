<!DOCTYPE html>
<html lang="ja">
<head>
<?php
	$title = '404 Not Found';
	include_once($_SERVER['DOCUMENT_ROOT'] . '/include/head.php');
?>
</head>
<body class="notfound">
	<div class="wrap">
		<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/include/header.php'); ?>
		<main>
			<div id="js-main-visual" class="main-visual">
				<h1 class="page-title">404 Not Found</h1>
				<div class="bottom-scroll">
					<a href="#anchor-contents">
						<div class="icon-mouse"></div>
						<span>SCROll</span>
					</a>
				</div>
			</div>
			<div id="anchor-contents" class="notfound-detail">
				<div class="inner-wrap">
					<p class="large-font">お探しのページは見つかりませんでした。</p>
					<p>申し訳ございませんが、お探しのページは見つかりませんでした。<br>URLが間違っているか、移動または削除された可能性があります。</p>
				</div>
			</div>
		</main>
		<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/include/footer.php'); ?>
	</div>
<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/include/script.php'); ?>
</body>
</html>
