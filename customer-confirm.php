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
  <style>

    .wrpper{
      margin-left: 11%;
      margin-right: 11%;
    }
    .wrpper h1{
      color: #7F5539;
      text-align: center;
      margin:40px 0 52px 0;
      font-size:20px;
    }
    .title-confirm{
      font-size:12px;
      margin-bottom: 8px;
      color: #7F5539;
    }
    .content-confirm{
      margin-bottom: 20px ;
      font-size: 12px;
    }
    input[type=submit] {
      /* 確認btnの調整・変更 */
      display: block;
      font-size: 16px;
      width: 60%;
      height: 48px;
      margin: 0 auto;
      margin-top: 40px;
      background-color: #7F5539;
      color: #fff;
      border: #fff;
    }
    .shop-logo{
      margin:12px 0 0 12px;
      width:60px;
      height:50px;
    }
  </style>
  <!-- タイトルここ -->
  <title>ご入力情報確認</title>
</head>

<body>
<img src="common/images/shop_logo.svg" alt="main logo" class="shop-logo">
<div class="wrpper">
<h1>ご入力内容の確認</h1>

<?php

echo '<p class="title-confirm">','お名前','</p>';
echo '<p class="content-confirm">',$_REQUEST['name'],'</p>';

echo '<p class="title-confirm">','お名前(フリガナ)','</p>';
echo '<p class="content-confirm">',$_REQUEST['kana'],'</p>';

echo '<p class="title-confirm">','郵便番号','</p>';
echo '<p class="content-confirm">',$_REQUEST['post'],'</p>';

echo '<p class="title-confirm">','住所','</p>';
echo '<p class="content-confirm">',$_REQUEST['address'],'</p>';

echo '<p class="title-confirm">','メールアドレス','</p>';
echo '<p class="content-confirm">',$_REQUEST['mail'],'</p>';

echo '<p class="title-confirm">','パスワード','</p>';
$passhash= password_hash($_REQUEST['password'],PASSWORD_DEFAULT);
echo '<p class="content-confirm">',$passhash,'</p>';
?>

<input type="submit" value="この内容で登録する">
</div>

<?php require 'includes/footer.php' ?>
</body>
</body>

</html>