<!DOCTYPE html>
<html lang="ja">
<head>
<?php
	$title = 'Project';
	include_once($_SERVER['DOCUMENT_ROOT'] . '/include/head.php');
?>
</head>
<body class="projects">
	<div class="wrap">
		<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/include/header.php'); ?>
		<main>
			<div id="js-main-visual" class="main-visual">
				<h1 class="page-title">PROJECTS</h1>
				<div class="bottom-scroll">
					<a href="#anchor-contents">
						<div class="icon-mouse"></div>
						<span>SCROll</span>
					</a>
				</div>
			</div>
			<div id="anchor-contents" class="project-list">
				<div class="inner-wrap">
					<ul>
						<li>
							<a href="/number_virus_searcher/">
								<div class="img-area"><img src="/images/projects/bg-project-1.jpg" alt=""></div>
								<div class="text-area">
									<h2>数字とウイルスの人探し</h2>
									<p>WEB</p>
								</div>
							</a>
						</li>
						<li>
							<a href="/bomb_travel/">
								<div class="img-area"><img src="/images/projects/bg-project-2.jpg" alt=""></div>
								<div class="text-area">
									<h2>東狼爆弾旅行</h2>
									<p>WEB</p>
								</div>
							</a>
						</li>
						<li>
							<a href="/skysiege_strategy/">
								<div class="img-area"><img src="/images/projects/bg-project-3.jpg" alt=""></div>
								<div class="text-area">
									<h2>上空包囲作戦</h2>
									<p>WEB</p>
								</div>
							</a>
						</li>
						<li>
							<a href="/laboratory_escape/">
								<div class="img-area"><img src="/images/projects/bg-project-4.jpg" alt=""></div>
								<div class="text-area">
									<h2>ある研究所からの脱出</h2>
									<p>WEB</p>
								</div>
							</a>
						</li>
						<li>
							<a href="/search_game/">
								<div class="img-area"><img src="/images/projects/bg-project-5.jpg" alt=""></div>
								<div class="text-area">
									<h2>蝙蝠探しゲーム</h2>
									<p>WEB</p>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</main>
		<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/include/footer.php'); ?>
	</div>
<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/include/script.php'); ?>
</body>
</html>
