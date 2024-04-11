<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v6.5.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="common/css/reset.css">
  <link rel="stylesheet" href="common/css/detail.css">
  <!-- 必要ならば下記のCSSを追加して -->
  <link rel="stylesheet" href="">
  <!-- タイトルここ -->
  <title>Document</title>
</head>

<body>
  <?php session_start() ?>

  <?php
  require 'includes/header.php';
  ?>

<?php
  require 'includes/database.php';

 // 商品IDに基づいて商品情報を取得
$sql = $pdo->prepare('select * from product where id=?');
$sql->execute([$_REQUEST['id']]);

// 取得した商品情報を表示
foreach ($sql as $row) {
    echo<<<END
    
    <ul class="pankuzu">
      <li><a href="index.php">top</a></li>
      <li>></li>
      <li><a href="product.php">商品一覧</a></li>
      <li>></li>
      <li>{$row['name']}</li>
    </ul>
    <hr>

END;
  }


  ?>

  <?php

  if (isset($_SESSION['customer'])) {
    // ログインしている


    echo '<p class="cart_name">ようこそ', $_SESSION['customer']['name'], '様</p> ';
  } else {

    echo '<p class="cart_name">ようこそ　ゲスト様</p> ';
  }


  ?>
  <hr>

  <div class=item_container>

    <?php
    require 'includes/database.php';
    $sql = $pdo->prepare('select * from product where id=?');
    $sql->execute([$_REQUEST['id']]);
    foreach ($sql as $row) {
      $formattedPrice = number_format($row['price']);

      echo '<p><img alt="image" src="common/images/product_', $row['id'], '.jpg" class="detail_item_image fade_up"></p>';
      echo '<div class="flex_box fade_up">';
      echo '<p class="product_name">', $row['name'], '</p>';
      echo '<p class="product_description">', $row['description'];
      echo '</p>';
      echo '<div class="price_area fade_up">';
      echo '<p class="product_price">', '税込 ', '&yen;', $formattedPrice, '</p>';
      echo '<div id="switch_btn"></div>';
      echo '</div>';
      echo '<div class="count_cart">';
      echo '<form action="cart-input.php" type="method">';
      echo '<div class="count_area">';
      echo '<input type="number" min="1" max="100"  name="count" value="" class="count_box">';
      echo '<span>個</span>';
      echo '<input class="button" type="submit" value="カートに入れる">';
      echo ' </div>';
      echo '<input type="hidden" name="id" value="', $row['id'], '">';
      echo '<input type="hidden" name="name" value="', $row['name'], '">';
      echo '<input type="hidden" name="price" value="', $row['price'], '">';
      echo '</div>';
      echo '</div>';
      echo '</form>';
    }

    ?>
  </div>

  <?php
  require 'includes/footer.php';
  ?>

  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="common/js/favorite.js"></script>

</body>

</html>