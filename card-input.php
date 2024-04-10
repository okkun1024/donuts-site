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
  <link rel="stylesheet" href="common/css/card.css">

  <!-- タイトルここ -->
  <title>クレジットカード情報</title>
</head>

<body>
  <?php session_start() ?>

  <img src="common/images/shop_logo.svg" alt="c.c.donuts">
  <h1 class="inputH">カード登録情報</h1>

  <form action="card-confirm.php" method="post" class="formInput">
    <p class="formP">お名前<span class="formS">（必須）</span></p>
    <input type="text" autocomplete="cc-name" name="name" id="formLong" required>
    <p class="formP">カード会社<span class="formS">（必須）</span></p>

    <label><input type="radio" name="card" value="JCB" checked="checked" required>JCB</label>
    <label><input type="radio" name="card" value="Visa">Visa</label>
    <label><input type="radio" name="card" value="Mastercard">Mastercard</label>

    <p class="formP">カード番号<span class="formS">（必須）</span></p>
    <input type="text" autocomplete="cc-number" name="cardNumber" id="formLong" inputmode="numeric" pattern="[\d ]{14,16}" title="14〜16桁の番号を入力してください" required>

    <p class="formP">有効期限<span class="formS">（必須）</span></p>
    <div class="formD"><input type="text" autocomplete="cc-exp-month" name="cardExpirationMonth" id="formShort" pattern="[\d ]{2}" title="2桁の番号を入力してください" required><span class="formExpiration">月</span></div>
    <div class="formD"><input type="text" autocomplete="cc-exp-year" name="cardExpirationYear" id="formShort" pattern="[\d ]{4}" title="4桁の番号を入力してください"><span class="formExpiration">年</span></div>

    <p class="formSecurity">セキュリティーコード<span class="formS">（必須）</span></p>
    <input type="text" autocomplete="cc-csc" name="security" id="formShort" pattern="[\d ]{3,4}" title="4桁以下の番号を入力してください" required>

    <input type="submit" value="ご入力内容を確認する" id="card_inpsub">
  </form>

  <?php require 'includes/footer.php'; ?>

</body>

</html>