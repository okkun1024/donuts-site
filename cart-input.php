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
session_start();

// カートに商品を追加
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// 商品情報をPOSTから取得
if (isset($_POST['id'], $_POST['name'], $_POST['price'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $count = $_POST['count']; // 数量

    // カートに商品がすでに存在するかチェック
    if (isset($_SESSION['cart'][$id])) {
        // 存在する場合は数量を更新
        $_SESSION['cart'][$id]['count'] += $count;
    } else {
        // 存在しない場合は新たに商品情報を追加
        $_SESSION['cart'][$id] = array(
            'name' => $name,
            'price' => $price,
            'count' => $count
        );
    }
}


?>

<?php

  require 'cart.php';
 
  ?>



</body>

</html>
<?php require 'includes/footer.php'; ?>