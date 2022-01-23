<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>株式会社Estra</title>
  <meta name="description" content="株式会社Estraのコーポレートサイトです。">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="header">
    <h1 class="header-ttl">
      <a href="<?php echo esc_url(home_url('/')); ?>">Estra</a>
    </h1>
    <nav class="header-nav">
      <ul class="header-nav__list">
        <li class="header-nav__item"><a href="<?php echo home_url("about"); ?>">About</a></li>
        <li class="header-nav__item"><a href="<?php echo home_url("about-member"); ?>">メンバー</a></li>
        <li class="header-nav__item"><a href="<?php echo home_url("about-philosophy"); ?>">経営理念</a></li>
        <li class="header-nav__item"><a href="news.html">ニュース</a></li>
        <li class="header-nav__item"><a href="<?php echo home_url("service"); ?>">サービス</a></li>
        <li class="header-nav__item"><a href="<?php echo home_url("recruit"); ?>">採用情報</a></li>
        <li class="header-nav__item"><a href="interview.html">インタビュー</a></li>
        <li class="header-nav__item"><a href="environment.html">働く環境</a></li>
        <li class="header-nav__item"><a href="<?php echo home_url("contact"); ?>">お問い合わせ</a></li>
      </ul>
    </nav>
    <div class="menu" id="menu">
      <span class="menu__line-top"></span>
      <span class="menu__line-middle"></span>
      <span class="menu__line-bottom"></span>
    </div>
    <nav class="drawer-nav" id="drawer-nav">
      <ul class="drawer-nav__list">
        <li class="drawer-nav__item"><a href="index.html">ホーム</a></li>
        <li class="drawer-nav__item"><a href="service.html">事業内容</a></li>
        <li class="drawer-nav__item"><a href="news.html">ニュース</a></li>
        <li class="drawer-nav__item"><a href="blog.html">社員ブログ</a></li>
        <li class="drawer-nav__item"><a href="company.html">会社概要</a></li>
        <li class="drawer-nav__item"><a href="recruit.html">採用情報</a></li>
        <li class="drawer-nav__item"><a href="contact.html">お問い合わせ</a></li>
      </ul>
    </nav>
  </header>