<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/favicon.ico" type="image/x-icon">

  <?php wp_head(); ?>
</head>

<body>
  <header class="wrapper">
    <h1>
      <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo.svg" alt="mainlogo"></a>
    </h1>

    <nav id="nav">
      <ul class="hidden-menu">
        <li><a href="">products</a></li>
        <li><a href="">about</a></li>
        <li><a href="">company</a></li>
        <li><a href="mailto:xxxx&#64;xxxx.xxxx.com?subject=お問い合わせ">contact</a></li>
      </ul>
    </nav>

    <div class="menu-btn">
      <span></span>
      <span></span>
    </div>

    <div id="mask"></div>
  </header>
