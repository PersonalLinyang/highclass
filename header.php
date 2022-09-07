<?php
/*
 * ヘッダ部分
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/free_slide.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/font.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/front.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/section_scroll_fade.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/section_scroll_slide.js"></script>
    <?php wp_head(); ?>
  </head>

  <body>

    <header class="header">
      <div class="header-logo"></div>
      <div class="header-menu"></div>
      <div class="header-navi-pc">
        <div class="header-navi-list">
          <p class="header-navi-item scroll-link" data-target="front-reason">Reason</p>
          <p class="header-navi-item scroll-link" data-target="front-case">Case</p>
          <p class="header-navi-item scroll-link" data-target="front-trainer">Trainer</p>
          <p class="header-navi-item scroll-link" data-target="front-price">Price</p>
          <p class="header-navi-item scroll-link" data-target="front-contact">Contact</p>
        </div>
      </div>
      <div class="header-navi-sp">
        <div class="header-navi-inner">
          <div class="header-navi-title">
            <p class="header-navi-title-en">Menu</p>
            <p class="header-navi-title-jp">メニュー</p>
          </div>
          <div class="header-navi-list">
            <div class="header-navi-item">
              <p class="header-navi-item-en scroll-link" data-target="front-reason">Reason</p>
              <p class="header-navi-item-jp scroll-link" data-target="front-reason">ホーム</p>
            </div>
            <div class="header-navi-item">
              <p class="header-navi-item-en scroll-link" data-target="front-case">Case</p>
              <p class="header-navi-item-jp scroll-link" data-target="front-case">選ばれる理由</p>
            </div>
            <div class="header-navi-item">
              <p class="header-navi-item-en scroll-link" data-target="front-trainer">Trainer</p>
              <p class="header-navi-item-jp scroll-link" data-target="front-trainer">導入事例</p>
            </div>
            <div class="header-navi-item">
              <p class="header-navi-item-en scroll-link" data-target="front-price">Price</p>
              <p class="header-navi-item-jp scroll-link" data-target="front-price">料金表</p>
            </div>
            <div class="header-navi-item">
              <p class="header-navi-item-en scroll-link" data-target="front-contact">Contact</p>
              <p class="header-navi-item-jp scroll-link" data-target="front-contact">お問い合わせ</p>
            </div>
          </div>
          <p class="front-contact-linkbtn black header-navi-button scroll-link" data-target="front-contact">LINEでお問合せ</p>
          <p class="header-navi-company">Copyright ©  株式会社ハイクラス All rights reserved.</p>
        </div>
      </div>
    </header>

    <main>