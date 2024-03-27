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

    #formShort {
      /* text入力欄の幅指定 */
      width: 20%;
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
      height: 48px;
      margin: 0 auto;
      margin-top: 40px;
      background-color: #7F5539;
      color: #fff;
      border: #fff;
    }
  </style>

  <!-- タイトルここ -->
  <title>クレジットカード情報</title>
</head>

<body>
  <img src="common/images/shop_logo.svg" alt="c.c.donuts">
  <h1>カード登録情報</h1>

  <form action="card-confirm.php" method="post">
    <p>お名前<span>（必須）</span></p>
    <input type="text" name="name" id="formLong" required>
    <p>カード会社<span>（必須）</span></p>

    <label><input type="radio" name="card" value="JCB" checked="checked" required>JCB</label>
    <label><input type="radio" name="card" value="Visa">Visa</label>
    <label><input type="radio" name="card" value="Mastercard">Mastercard</label>

    <p>カード番号<span>（必須）</span></p>
    <input type="text" name="cardNumber" id="formLong" required>

    <p>有効期限<span>（必須）</span></p>
    <div><input type="text" name="cardExpirationMonth" id="formShort" required><span class="formExpiration">月</span></div>
    <div><input type="text" name="cardExpirationYear" id="formShort"><span class="formExpiration">年</span></div>

    <p class="formSecurity">セキュリティーコード<span>（必須）</span></p>
    <input type="text" name="security" id="formShort" required>

    <input type="submit" value="ご入力内容を確認する">
  </form>

  <?php require 'includes/footer.php' ?>

</body>

</html>