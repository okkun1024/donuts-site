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
    .former {
      margin: auto;
      border: 2px solid #E8C2CA;
      width: 89%;
    }
    .former p{
      margin:20px 0 4px 4%;
      font-size: 12px;
      color:#7F5539;
    }
    .login-inp-h1{
      margin:32px 0 60px 0; 
      text-align: center;
      color:#7F5539;
    }
    .former input {
      display: block;
      margin: auto;
      width:90%;
    }
    .former input[type=submit]{
      width:200px;
      padding:12px;
      border-style: none;
      background-color: #7F5539;
      font-size: 16px;
      color:white;
      margin-top:40px;
      margin-bottom:20px;
    }
    .relog{
      width:95%;
    }
    .relog a{
      display: block;
      text-align: right;
      margin-top:24px;
      text-decoration: underline;
      color:#7F5539;
    }
    
  </style>
  <!-- タイトルここ -->
  <title>ログイン-入力ページ</title>
</head>

<body>
  <?php
  require 'includes/header.php';
  ?>
  <h1 class=login-inp-h1>ログイン</h1>
  <form class="former"action="login-complete.php" method="post">
    <p>メールアドレス</p>
    <input type="email" name="mail" required>
    <p>パスワード</p>
    <input type="password" name="password" required>
    <input type="submit" value="ログインする">
  </form>

  <p class="relog"><a href="customer-input.php">会員登録がお済でない方はこちら</a></p>
  <?php
  require 'includes/footer.php';
  ?>
</body>
</html>