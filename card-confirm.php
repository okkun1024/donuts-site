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
  <!-- タイトルここ -->
  <title>カード入力内容確認</title>
</head>

<body>
  <img src="common/images/shop_logo.svg" alt="c.c.donuts">
  <?php
  echo '<h1>ご入力内容の確認</h1>';
  echo '<p>お名前</p>';
  echo '<p>|', htmlspecialchars($_REQUEST['name']), '</p>';
  echo '<p>カード会社</p>';
  echo '<p>|', htmlspecialchars($_REQUEST['card']), '</p>';
  echo '<p>カード番号<p/>';
  echo '<p>有効期限</p>';
  echo '<p>|', htmlspecialchars($_REQUEST['cardExpirationMonth']), '/', htmlspecialchars($_REQUEST['cardExpirationYear']), '</p>';
  echo '<p>セキュリティーコード</p>';
  echo '<p>|', htmlspecialchars($_REQUEST['security']), '</p>';


  ?>



  <?php require 'includes/footer.php'; ?>
</body>

</html>