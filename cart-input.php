
<?php require 'includes/header.php' ?>
<?php
session_start();
?>


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

<ul class=cart_pankuzu>
<li><a href="index.php">top</a></li>
<li>></li>
<li>カート</li>
</ul>

<hr>

<?php
if (isset($_SESSION['customer'])) {
// ログインしている

echo '<p class="id_name_no_cart">ようこそ',$_SESSION['customer']['name'],'様</p> ';

}else{
  // ログアウトしている
echo '<p class="id_name_no_cart">ようこそゲスト様</p> ';
}

echo '<hr>';




  $id = $_REQUEST['id'];


  // セッションにproductがセットされているか判定
  if (!isset($_SESSION['product'])) {
    // セットされていない場合

    $_REQUEST['product'] = [];
  }

  // 初期個数設定
  $count = 0;

  // データベースとidが同じ商品がセッションのproductに入っているか確認
  if (isset($_SESSION['product'][$id])) {
    // 同じidの商品が入っている場合

    // セッションのproduct内　idとリンクする個数のデータを$countに登録
    $count = $_SESSION['product'][$id]['count'];
  }

  // セッションのproductにカートにつかする情報を登録
  $_SESSION['product'][$id] = ['count' => $count + $_REQUEST['count']];

  require 'includes/database.php';

  $sql = $pdo->prepare('select * from product where id=?');
  $sql->execute([$_REQUEST['id']]);

  foreach ($sql as $cart) {

    $_SESSION['product'][$id] = [
      'name' => $cart['name'],
      'price' => $cart['price'],
      'count' => $count+$_REQUEST['count']
    ];
  }

  echo '<p class="id_name_no_cart">カートに追加しました。</p>';

  echo '<main>';
  require 'cart.php';
  echo '<main>';


  // var_dump ($_REQUEST['id']);
  ?>



</body>

</html>
<?php require 'includes/footer.php'; ?>