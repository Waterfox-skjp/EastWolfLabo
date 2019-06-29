<!DOCTYPE html>
<html lang="ja">
<head>
<?php
	$title = 'Member';
	include_once($_SERVER['DOCUMENT_ROOT'] . '/include/head.php');
?>
</head>
<body class="member">
	<div class="wrap">
		<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/include/header.php'); ?>
		<main>
			<div id="js-main-visual" class="main-visual">
				<h1 class="page-title">MEMBER</h1>
				<div class="bottom-scroll">
					<a href="#anchor-contents">
						<div class="icon-mouse"></div>
						<span>SCROll</span>
					</a>
				</div>
			</div>
			<div id="anchor-contents" class="member-wrap">
			 <?php include_once($_SERVER['DOCUMENT_ROOT'].'/include/member-list.php'); ?>
				<div class="inner-wrap">
					<section>
						<h2>企画・制作</h2>
						<ul class="member-list center">
							<?php listRendering($producer);?>
						</ul>
					</section>
					<section>
						<h2><span>WEB</span>デザイン</h2>
						<ul class="member-list center">
							<?php listRendering($web);?>
						</ul>
					</section>
					<section>
						<h2>アイコン・ロゴデザイン</h2>
						<ul class="member-list center">
							<?php listRendering($design);?>
						</ul>
					</section>
					<section>
						<h2>制作協力</h2>
						<ul class="member-list">
							<?php listRendering($cooperator);?>
						</ul>
					</section>
					<section>
						<h2>謎制作</h2>
						<ul class="member-list">
							<?php listRendering($supporter);?>
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
