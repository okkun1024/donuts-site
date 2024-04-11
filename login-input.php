
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
  <link rel="stylesheet" href="common/css/login,logout.css">
  <!-- タイトルここ -->
  <title>ログイン-入力ページ</title>
</head>

<body>
<?php session_start() ?>

  <?php
  require 'includes/header.php';
  ?>
  <h1 class=login-inp-h1>ログイン</h1>
  <form class="former"action="login-complete.php" method="post">
    <p>メールアドレス</p>
    <input type="email" name="mail" required>
    <p>パスワード</p>
    <input type="password" name="password" required>
    <input type="submit" value="ログインする" style="font-family: 'Noto Sans JP';" class="submit_btn" >
  </form>

  <p class="relog"><a href="customer-input.php">会員登録がお済でない方はこちら</a></p>
  <?php
  require 'includes/footer.php';
  ?>
</body>
</html>