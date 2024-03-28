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
    h1 {
      /* 見出しの調整・変更 */
      margin-top: 40px;
      margin-bottom: 60px;
      text-align: center;
      font-size: 20px;
      color: #7F5539;
    }

    form {
      /* フォームの幅調整 */
      margin-left: 11%;
      margin-right: 11%;
    }

    p {
      /* 文字サイズ・外側下辺幅調整 */
      font-size: 12px;
      margin-bottom: 8px;
    }

    .confirmP {
      /* 外側下辺幅・｜・内側左余白調整 */
      margin-bottom: 24px;
      border-left: 1px solid #7F5539;
      padding-left: 3px;
    }

    div {
      /* 親要素にflex*/
      display: flex;
      border-left: 1px solid #7F5539;
    }

    input[type=submit] {
      /* 確認btnの調整・変更 */
      display: block;
      width: 60%;
      height: 48px;
      margin: 0 auto;
      background-color: #7F5539;
      color: #fff;
      border: #fff;
      margin-top: 100px;
      margin-bottom: 80px;
    }
  </style>
  <!-- タイトルここ -->
  <title>カード入力内容確認</title>
</head>

<body>
  <img src="common/images/shop_logo.svg" alt="c.c.donuts">
  <?php
  echo '<form>';
  echo '<h1>ご入力内容の確認</h1>';
  echo '<p>お名前</p>';
  echo '<p  class="confirmP">', htmlspecialchars($_REQUEST['name']), '</p>';
  echo '<p>カード会社</p>';
  echo '<p  class="confirmP">', $_REQUEST['card'], '</p>';
  echo '<p>カード番号<p/>';
  echo '<p  class="confirmP">', htmlspecialchars($_REQUEST['cardNumber']), '</p>';
  echo '<p>有効期限</p>';
  echo '<p  class="confirmP">', $_REQUEST['cardExpirationMonth'], '/', $_REQUEST['cardExpirationYear'], '</p>';
  echo '<p>セキュリティーコード</p>';
  echo '<div>';
  $security = mb_strlen($_REQUEST['security']);
  //forループを使用しセキュリティコードを・で出力する
  for ($i = 1; $i <= $security; $i++) {
    echo '<span>・</span>';
  }
  echo '</div>';

  echo ' <input type="submit" value="この内容で登録する">';

  echo '</form>';
  ?>

  <?php require 'includes/footer.php'; ?>

</body>

</html>