<!DOCTYPE html>
<html lang="ja">
<head>
<?php
  $title = '';
  require_once($_SERVER['DOCUMENT_ROOT'] . '/include/head.php');
?>
</head>
<body class="home">
  <div class="wrap">
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/include/header.php'); ?>
    <main>
      <div id="js-main-visual" class="main-visual">
        <div class="bottom-scroll">
          <a href="#main">
            <div class="icon-mouse"></div>
            <span>SCROll</span>
          </a>
        </div>
      </div>
      <div id="main" class="project-list">
        <ul>
          <li>
            <a href="/number_virus_searcher/">
              <h2>数字とウイルスの人探し</h2>
              <img src="/images/projects/bg-project-1.jpg" alt="Project1">
            </a>
          </li>
          <li>
            <a href="/bomb_travel/">
              <h2>東狼爆弾旅行</h2>
              <img src="/images/projects/bg-project-2.jpg" alt="Project2">
            </a>
          </li>
          <li>
            <a href="/skysiege_strategy/">
              <h2>上空包囲作戦</h2>
              <img src="/images/projects/bg-project-3.jpg" alt="Project3">
            </a>
          </li>
          <li>
            <a href="/laboratory_escape/">
              <h2>ある研究所からの脱出</h2>
              <img src="/images/projects/bg-project-4.jpg" alt="Project4">
            </a>
          </li>
          <li>
            <a href="/search_game/">
              <h2>蝙蝠探しゲーム</h2>
              <img src="/images/projects/bg-project-5.jpg" alt="Project5">
            </a>
          </li>
        </ul>
      </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/include/footer.php'); ?>
  </div>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/include/script.php'); ?>
</body>
</html>
