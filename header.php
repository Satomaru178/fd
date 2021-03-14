<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Furniture Design</title>

  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/main.js"></script>

  <?php wp_head(); ?>
</head>

<body>
  <header class="wrapper">
    <a href="index.html"><img src="img/logo.svg" alt="mainlogo"></a>
    <!--ここはh1で囲う-->

    <nav id="nav">
      <ul class="hidden-menu">
        <li><a href="products.html">products</a></li>
        <li><a href="about.html">about</a></li>
        <li><a href="company.html">company</a></li>
        <li><a href="mailto:xxxx&#64;xxxx.xxxx.com?subject=お問い合わせ">contact</a></li>
      </ul>
    </nav>

    <div class="menu-btn">
      <span></span>
      <span></span>
    </div>

    <div id="mask"></div>
  </header>
