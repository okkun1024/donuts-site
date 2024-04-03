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
    body {
      color: #7F5539;
    }

    h1 {
      /* 見出しの調整・変更 */
      margin-top: 40px;
      margin-bottom: 52px;
      text-align: center;
      font-size: 24px;
    }

    form {
      /* フォームの幅調整 */
      margin-left: 11%;
      margin-right: 11%;
    }

    p {
      /* 文字サイズ変更・色変更 */
      font-size: 12px;
      margin-bottom: 8px;
    }

    span {
      /* 必須項目色変更 */
      color: #BF0000;
    }

    input[type=text],
    input[type=submit] {
      display: block;
      width: 100%;
    }

    label {
      /* ラジオbtnの幅調整 */
      padding-right: 30px;
    }

    input[type=radio] {
      /* ラジオbtn高さ調整 */
      margin: 12px 0 20px 0;
    }

    #formLong {
      /* textの外側の高さ調整*/
      margin-bottom: 20px;
    }

    form .post-input{
      width:47%;
    }

    div {
      /* 横並びへの変更 ・外側下辺の幅変更*/
      display: flex;
      margin-bottom: 8px;
    }

    .formExpiration {
      /* 月・年のサイズ・色変更 */
      margin-left: 12px;
      color: #7F5539;
    }

    .formSecurity {
      /* 外側上辺幅変更 */
      margin-top: 20px;
    }

    input[type=submit] {
      /* 確認btnの調整・変更 */
      width: 60%;
      font-size: 16px;
      height: 48px;
      margin: 0 auto 80px;
      margin-top: 40px;
      background-color: #7F5539;
      color: #fff;
      border: #fff;
    }
    .caution{
      font-size:8px;
      color:#BF0000;
    }
    .shop-logo{
      margin:12px 0 0 12px;
      width:60px;
      height:50px;
    }
  </style>
  <!-- タイトルここ -->
  <title>会員情報登録</title>
</head>

<body>
<?php session_start() ?>

  <img src="common/images/shop_logo.svg" alt="main logo" class="shop-logo">
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

    <input type="submit" value="ご入力内容を確認する" >
  </form>
 
  <?php require 'includes/footer.php' ?>

</body>

</html>