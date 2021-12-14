<!-- ************************************ -->
<!-- ************  ヘッダー  ************ -->
<!-- ************************************ -->

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=yes">
  <meta name="description" content="エンジニアKeitaChimoriのポートフォリオサイトです。">
  <title>
    <?php if (is_front_page()) : ?>
      Home | KeitaChimori Portfolio
    <?php elseif (is_page('about')) : ?>
      About | KeitaChimori Portfolio
    <?php elseif (is_single()) : ?>
      Work | KeitaChimori Portfolio
    <?php elseif (is_archive()) : ?>
      Works | KeitaChimori Portfolio
    <?php endif; ?>
  </title>
  <!-- ファビコン -->
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/images/android-chrome-192x192.png">
  <!-- ress.css -->
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <!-- css -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" type="text/css">
  <!-- fontawsonme -->
  <script src="https://kit.fontawesome.com/99c99e8534.js" crossorigin="anonymous"></script>
  <?php wp_head(); ?>
</head>

<body>
  <?php if (is_front_page()) : ?>
    <div class="big-bg">
    <?php endif; ?>
    <!-- header -->
    <header>
      <!-- PC用 -->
      <!-- ヘッダーメニュー -->
      <div class="header-menu">
        <!-- ロゴ・タイトル -->
        <h1 class="logo">
          <a href="<?php echo home_url(); ?>">
            <span>Web Enginer</span><br>Keita Chimori
          </a>
        </h1><!-- /.logo -->

        <!-- PC用ヘッダーメニュー -->
        <nav class="pc-menu">
          <ul>
            <!-- <li><a href="<?php echo home_url(); ?>">Home</a></li> -->
            <li><a href="<?php echo home_url(); ?>/about">About</a></li>
            <li><a href="<?php echo home_url(); ?>/works">Works</a></li>
            <li><a href="<?php echo home_url(); ?>/#contact">Contact</a></li>
            <li><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_instagram.png" alt="インスタグラムのアイコン画像"></a></li>
          </ul>
        </nav><!-- /.pc-menu -->
      </div><!-- /.header-menu -->

        <!-- SP用 -->
        <!-- ハンバーガーメニューボタン -->
        <div class="openbtn"><span></span><span></span><span></span></div>
        <!-- グローバルナビゲーション -->
        <nav id="g-nav">
          <div id="g-nav-list">
            <ul>
            <li><a href="<?php echo home_url(); ?>">Home</a></li>
            <li><a href="<?php echo home_url(); ?>/about">About</a></li>
            <li><a href="<?php echo home_url(); ?>/works">Works</a></li>
            <li><a href="<?php echo home_url(); ?>/#contact">Contact</a></li>
            <li><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_instagram.png" alt="インスタグラムのアイコン画像"></a></li>
            </ul>
          </div>
        </nav>

      <!-- スマホ用ヘッダーメニュー -->
      <!-- <nav class="g-nav">
        <ul>
          <li><a href="<?php bloginfo('url') ?>">Home</a></li>
          <li><a href="<?php bloginfo('url') ?>/about">About</a></li>
          <li><a href="<?php bloginfo('url') ?>/works">Works</a></li>
          <li><a href="<?php bloginfo('url') ?>/#contact">Contact</a></li>
          <li class="close"><span><i class="fas fa-times"></i> Close</span></li>
        </ul>
      </nav> -->

      <!-- ハンバーガーメニュー -->
      <!-- <div id="hamburger">
        <span></span>
      </div> -->

    </header>