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
  <title>Cart-delete</title>
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

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    // 商品をカートから削除
    unset($_SESSION['cart'][$id]);
}

// カートへリダイレクト
header('Location: cart-show.php');
exit;
?>




  <?php
  require 'cart.php';
  ?>
</body>

</html>