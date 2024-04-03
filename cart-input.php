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
<?php 
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

<!-- 商品の出力 -->
<?php
$id=$_REQUEST['id'];
if(!isset($_SESSION['product'])){
  $_SESSION['product']=[];
}
$count=0;
if(isset($_SESSION['product']['id'])){
  $count =$_SESSION['product'][$id]['count'];
}
$_SESSION['product'][$id]=[
'name'=>$_REQUEST['name'],
'price'=>$_REQUEST['price'],
'count'=>$count+$_REQUEST['count']
];
echo <<<END
<p>カートに商品を追加しました。</p>
<hr>
END;
require 'cart-show.php';
?>

<?php require 'includes/footer.php'; ?>
