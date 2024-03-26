<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="comon/css/reset.css">
  <!-- 必要ならば下記のCSSを追加して -->
  <link rel="stylesheet" href="common/css/common.css">
  <style>
    form{
      border: 2px solid #E8C2CA;
      width:50%;
    }
    p,h1{text-align:center;}
    input{
      display: block;
      margin:  auto;}
    
  </style>
  <!-- タイトルここ -->
  <title>ログイン-入力ページ</title>
</head>

<body>
<h1>ログイン</h1>

<form action="login-complete.php" method="post">
<p>メールアドレス</p>
<input type="email" name="mail" required>
<p>パスワード</p>
<input type="password" name="password" required>
<input type="submit" value="ログインする">
</form>
</body>

</html>