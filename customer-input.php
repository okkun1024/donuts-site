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
  <link rel="stylesheet" href="common/css/customer-input.css">
  <!-- タイトルここ -->
  <title>会員情報登録</title>
</head>

<body>
<?php session_start() ?>

<a href="index.php"><img src="common/images/shop_logo.svg" alt="main logo" class="shop-logo"></a>
  <h1>会員登録</h1>

    <form action="customer-confirm.php" method="post">
      <p>お名前<span>（必須）</span></p>
      <input type="text" name="name" id="formLong" required>
    
      <p>お名前（フリガナ）<span>（必須）</span></p>
      <input type="text" name="kana" id="formLong" pattern="[\u30A1-\u30FA\u30FC]+" title="全角カタカナで入力てください。" required>
      <p>郵便番号<span>（必須）</span></p>
      <input type="text" name="post_code" id="formLong" class="post-input"  pattern="\d{7}" title="7桁の半角数字で入力してください。" required>
      <p>住所<span>（必須）</span></p>
      <input type="text" name="address" id="formLong" required>
      <p>メールアドレス<span>（必須）</span></p>
      <input type="mail" name="mail" id="formLong" pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
      <p>パスワード<span>（必須）</span></p>
      <p class="caution">A-Z、a-z、0-9を少なくとも各1つは含めて8文字以上で入力してください。</p>
      <input type="text" name="password" id="formLong" pattern="[a-zA-Z0-9]{8,}" required>
      <input type="submit" value="ご入力内容を確認する" class="submit_btn">
    </form>
 
  <?php require 'includes/footer.php' ?>

</body>

</html>