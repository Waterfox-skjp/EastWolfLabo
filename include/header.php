<?php
  function nav_current($path) {
    $now_uri = $_SERVER['REQUEST_URI'];
    if ($path == $now_uri) {
      echo 'current';
    } else {
      echo '';
    }
  }
?>
<header>
  <div class="inner-wrap">
    <?php
      if ( $_SERVER['REQUEST_URI'] == '/' ) {
        echo '<h1 class="logo"><a href="/"><img src="/images/common/logo.png" alt="東狼研究所"></a></h1>';
      } else {
        echo '<div class="logo"><a href="/"><img src="/images/common/logo.png" alt="東狼研究所"></a></div>';
      }
    ?>
    <div id="js-nav-open" class="btn-nav"><img src="/images/common/btn-nav.svg" alt=""></div>
    <div id="js-nav-bg" class="bg-black"></div>
    <nav>
      <div class="head-area">
        <div id="js-nav-close" class="btn-close"><img src="/images/common/btn-close.svg" alt=""></div>
      </div>
      <ul>
        <li class="<?php nav_current('/');?>">
          <a href="/">HOME</a>
        </li>
        <li class="<?php nav_current('/projects/');?>">
          <a href="/projects/">PROJECTS</a>
        </li>
        <li class="<?php nav_current('/about/');?>">
          <a href="/about/">ABOUT</a>
        </li>
        <li class="<?php nav_current('/member/');?>">
          <a href="/member/">MEMBER</a>
        </li>
        <li class="<?php nav_current('/contact/');?>">
          <a href="/contact/">CONTACT</a>
        </li>
      </ul>
    </nav>
  </div>
</header>
