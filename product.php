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
  <!-- 必要ならば下記のCSSを追加して -->
  <link rel="stylesheet" href="common/css/product.css">
  <!-- タイトルここ -->
  <title>Document</title>
</head>

<body>
<form action="product.php" method="post">

<h2>商品一覧</h2>
<?php
 session_start(); 
// データベース接続
require 'includes/database.php';

// フォームの入力値がセットされているか判定
if (isset($_REQUEST['keyword'])) {
  // セットされている場合、入力値あり
  // productテーブル内で部分一致するレコードを取得
  $sql = $pdo->prepare('select * from product where name like ?');
  $sql->execute(['%' . $_REQUEST['keyword'] . '%']);
} else {
  // セットされていない場合、入力値なし
  // productテーブルのすべてのレコードを取得
  $sql = $pdo->query('select * from product');
}

$counter=0;
// SQL文の実行結果をHTMLで出力
foreach ($sql as $row) {
  $id = $row['id'];

  if($counter >=6){break;}


// <table>

// <div>
//   <img src="common/images/product_{$id}.jpg" alt="{$row['name']}">
//   <p><a href="detail.php?id={$id}">
//     {$row['name']}</a> {$row['price']}
//   </p>
// </div>
// 価格を3桁ごとにカンマで区切る
$formattedPrice = number_format($row['price']);

echo <<<END
<div class="product_box">
  <div class="item">
    <a href="detail-{$id}.php?id=$id">
      <img src="common/images/product_{$id}.jpg" alt="{$row['name']}">
    </a>
    <p>{$row['name']}
      <br>税込 &bsol;{$formattedPrice}
    </p>
    <p><i class="fa-regular fa-heart"></i></p>
    <form action="cartinput.php" method="post">
    <input type="hidden" name="name" value="{$row['name']}">
    <input type="hidden" name="price" value="{$row['price']}">
    <input type="hidden" name="id" value="{$row['id']}">
    <input type="hidden" name="count" value="1">
    <input class="cart_btn" type="submit" value="カートに入れる"> 
  </div>
END;
$counter ++;

}
// product_boxの終了タグ
echo '</div>';


$sql = $pdo->query('select * from product');
$counter2=0;
foreach ($sql as $row) {
  $id = $row['id'];

  if($counter2 >=6){break;}

  // <table>

  // <div>
  //   <img src="common/images/variety_{$id}.jpg" alt="{$row['name']}">
  //   <p><a href="detail.php?id={$id}">
  //     {$row['name']}</a> {$row['price']}
  //   </p>
  // </div>

  echo <<<END
  <div class="variety_box">
  <div class="item">
    <a href="detail-{$category}.php">
      <img src="common/images/variety_{$id}.jpg" alt="{$row['name']}">
    </a>
    <p>{$row['name']}
      <br>税込 &bsol;{$formattedPrice}
    </p>
    <p><i class="fa-regular fa-heart"></i></p>
    <form action="cartinput.php" method="post">
    <input class="cart_btn" type="button" value="カートに入れる"> 
  </div>
  

END;
$counter2 ++;


}
echo '</div>';


?>
</body>

</html>