<?php
  define (URL, (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
  if ($title) {
    $title = $title . ' | 東狼研究所 EastWolfLaboratory';
  } else {
    $title = '東狼研究所 EastWolfLaboratory';
  }
  $description = '今話題のWEB謎解きサイト！君にはこの謎を解くことができるか！？';
  $ogp_image = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST'] . '/images/common/ogp.png';
  $css_time = filemtime($_SERVER['DOCUMENT_ROOT'] . '/css/style.css');
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="format-detection" content="email=no,telephone=no,address=no">
<title><?php echo $title ?></title>
<meta name="description" content="<?php echo $description; ?>">
<link rel="stylesheet" href="/css/style.css?<?php echo $css_time; ?>">

<!-- Google / Search Engine Tags -->
<meta itemprop="name" content="<?php echo $title ?>">
<meta itemprop="description" content="<?php echo $description; ?>">
<meta itemprop="image" content="<?php echo $ogp_image ?>">

<!-- Facebook Meta Tags -->
<meta property="og:url" content="<?php echo URL ?>">
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo $title ?>">
<meta property="og:description" content="<?php echo $description; ?>">
<meta property="og:image" content="<?php echo $ogp_image ?>">

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo $title ?>">
<meta name="twitter:description" content="<?php echo $description; ?>">
<meta name="twitter:image" content="<?php echo $ogp_image ?>">
