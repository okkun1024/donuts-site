<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="common/css/reset.css">
    <!-- 必要ならば下記のCSSを追加して -->
    <link rel="stylesheet" href="common/css/cart.css">
    <!-- タイトルここ -->
    <title>Cart</title>
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


  $id = $_REQUEST['id'];
  $countToAdd = (int)$_REQUEST['count']; // 文字列を整数にキャスト

  // セッションにproductがセットされているか判定
  if (!isset($_SESSION['product'])) {
    // セットされていない場合

    $_SESSION['product'] = [];
  }

  // 初期個数設定
  $count = 0;

  // データベースとidが同じ商品がセッションのproductに入っているか確認
  if (isset($_SESSION['product'][$id])) {
    // 同じidの商品が入っている場合

    // セッションのproduct内　idとリンクする個数のデータを$countに登録
    $count = $_SESSION['product'][$id]['count'];
  }

  // セッションのproductをカートに情報を登録
  $_SESSION['product'][$id] = [
    'name'=>$_REQUEST['name'],
    'price'=>$_REQUEST['price'],
    'count' => $count + $countToAdd
  ];

  
  echo '<p>カートに追加しました。</p>';

  require 'cart.php';
 
  ?>



</body>

</html>
<?php require 'includes/footer.php'; ?>