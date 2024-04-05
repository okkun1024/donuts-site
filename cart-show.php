<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="common/css/reset.css">
  <!-- 必要ならば下記のCSSを追加して -->
  <link rel="stylesheet" href="">
  <!-- タイトルここ -->
  <title>Cart-Show</title>
</head>

<body>
  <?php 
session_start();
require 'includes\header.php';
?>


<!-- パンくずメニュー -->
<div class="cart_pankuzu">
  <span><a href="">Top</a></span>
  <span>></span>
  <span>カート</span>
</div>

<!-- user名の出力 -->
<div class="cart_name">
  <?php
  if(isset($_SESSION['customer'])){
    echo 'ようこそ',$_SESSION['customer']['name'],'様';
  }else{
    echo 'ようこそゲスト様';
  }
  ?>
</div>

<?php
session_start();

if (!isset($_SESSION['cart'])) {
    echo 'カートは空です。';
} else {
    echo '<table>';
    echo '<tr><th>商品名</th><th>価格</th><th>数量</th><th>操作</th></tr>';
    foreach ($_SESSION['cart'] as $id => $item) {
        echo '<tr>';
        // 商品画像（商品IDに基づいて適切な画像パスを設定）
        echo '<td><img src="common/images/product_' . htmlspecialchars($id) . '.jpg" alt="' . htmlspecialchars($item['name']) . '" style="width: 100px;"></td>';
        // 商品名
        echo '<td>' . htmlspecialchars($item['name']) . '</td>';
        // 価格
        echo '<td>¥' . number_format(htmlspecialchars($item['price'])) . '</td>';
        // 数量
        echo '<td>' . htmlspecialchars($item['count']) . '</td>';
        // 削除機能
        echo '<td><form action="cart-delete.php" method="post"><input type="hidden" name="id" value="' . $id . '"><input type="submit" value="削除"></form></td>';
        echo '</tr>';
    }
    echo '</table>';
}
?>
  <?php
  require 'cart.php';
  ?>
  </body>

</html>