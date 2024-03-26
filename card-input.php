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
  <link rel="stylesheet" href="">
  <!-- タイトルここ -->
  <title>クレジットカード情報</title>
</head>

<body>
  <h1>カード登録情報</h1>

  <form action="" method="post">
    <p>お名前<span></span></p>
    <input type="text" name="name">
    <p>カード会社<span></span></p>

    <label><input type="radio" name="card" value="JCB" checked="checked">JCB</label>
    <label><input type="radio" name="card" value="Visa">Visa</label>
    <label><input type="radio" name="card" value="Mastercard">Mastercard</label>

    <p>カード番号<span></span></p>
    <input type="text" name="cardNumber">
    <p>有効期限<span></span></p>
    <input type="text" name="cardExpirationMonth">月
    <div><input type="text" name="cardExpirationYear">年</div>
    <p>セキュリティーコード<span></span></p>
    <input type="text" name="security">
    <p><input type="submit" value="ご入力内容を確認する"></p>
  </form>



</body>

</html>