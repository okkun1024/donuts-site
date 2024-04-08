<?php
session_start();
?>

<?php require 'includes/header.php' ?>


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="common/css/reset.css">
  <link rel="stylesheet" href="common/css/cart.css">

  <title>Cart-input</title>

</head>

<body>




<main>

<ul class=pankuzu>
<li><a href="index.php">top</a></li>
<li>></li>
<li>カート</li>
</ul>

<hr>
<?php

if (isset($_SESSION['customer'])) {
// ログインしている

echo '<p class="cart_name">ようこそ',$_SESSION['customer']['name'],'様</p> ';

}else{
  // ログアウトしている
echo '<p class="cart_name">ようこそゲスト様</p> ';
}

echo '<hr>';



// 指定idの勝因をカートから削除
unset($_SESSION['product'][$_REQUEST['id']]);


echo '<p class="product_delete">カートから商品を削除しました。</p>';


require 'cart.php';

echo '</main>';

?>

</body>
</html>


<?php require 'includes/footer.php'; ?>