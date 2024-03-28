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
  <link rel="stylesheet" href="common/css/common.css">
  <style>





  </style>
  <!-- タイトルここ -->
  <title>カード入力内容確認</title>
</head>

<body>
  <img src="common/images/shop_logo.svg" alt="c.c.donuts">
  <?php

  echo '<h1>ご入力内容の確認</h1>';
  echo '<p class="confirmP">お名前</p>';
  echo '<p>', htmlspecialchars($_REQUEST['name']), '</p>';
  echo '<p class="confirmP>カード会社</p>';
  echo '<p>', htmlspecialchars($_REQUEST['card']), '</p>';
  echo '<p class="confirmP>カード番号<p/>';
  echo '<p>', htmlspecialchars($_REQUEST['cardNumber']), '</p>';
  echo '<p class="confirmP>有効期限</p>';
  echo '<p>', htmlspecialchars($_REQUEST['cardExpirationMonth']), '/', htmlspecialchars($_REQUEST['cardExpirationYear']), '</p>';
  echo '<p class="confirmP>セキュリティーコード</p>';
  $security = mb_strlen($_REQUEST['security']);
  //forループを使用しセキュリティコードを・で出力する
  for ($i = 0; $i <= $security; $i++) {
    echo '<span>・</span>';
  }

  ?>

  <?php require 'includes/footer.php'; ?>

</body>

</html>