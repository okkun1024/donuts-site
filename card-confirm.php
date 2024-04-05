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
  <link rel="stylesheet" href="common/css/card.css">
  <!-- タイトルここ -->
  <title>カード入力内容確認</title>
</head>

<body>
  <?php session_start(); ?>

  <img src="common/images/shop_logo.svg" alt="c.c.donuts">
  <div class="confirmForm">
    <?php
    echo '<h1 class="confirmH">ご入力内容の確認</h1>';
    echo '<p class="confirmItem">お名前</p>';
    echo '<p  class="confirmP">', htmlspecialchars($_REQUEST['name']), '</p>';
    echo '<p class="confirmItem">カード会社</p>';
    echo '<p  class="confirmP">', $_REQUEST['card'], '</p>';
    echo '<p class="confirmItem">カード番号<p/>';
    echo '<p  class="confirmP">', htmlspecialchars($_REQUEST['cardNumber']), '</p>';
    echo '<p class="confirmItem">有効期限</p>';
    echo '<p  class="confirmP">', $_REQUEST['cardExpirationMonth'], '/', $_REQUEST['cardExpirationYear'], '</p>';
    echo '<p class="confirmItem">セキュリティーコード</p>';
    echo '<div class="securityFlex">';
    $security = mb_strlen($_REQUEST['security']);
    //forループを使用しセキュリティコードを・で出力する
    for ($i = 1; $i <= $security; $i++) {
      echo '<span>・</span>';
    }
    echo '</div>';

    $name = $card = $cardNumber = $cardExpirationMonth = $cardExpirationYear = $security = '';
    $name = htmlspecialchars($_REQUEST['name']);
    $card = htmlspecialchars($_REQUEST['card']);
    $cardNumber = htmlspecialchars($_REQUEST['cardNumber']);
    $cardExpirationMonth = htmlspecialchars($_REQUEST['cardExpirationMonth']);
    $cardExpirationYear = htmlspecialchars($_REQUEST['cardExpirationYear']);
    $security = htmlspecialchars($_REQUEST['security']);
    echo '<form action="card-complete.php" method="post">';
    echo '<input type="hidden" name="name" value="', $name, '">';
    echo '<input type="hidden" name="card" value="', $card, '">';
    echo '<input type="hidden" name="cardNumber" value="', $cardNumber, '">';
    echo '<input type="hidden" name="cardExpirationMonth" value="', $cardExpirationMonth, '" >';
    echo '<input type="hidden" name="cardExpirationYear" value="', $cardExpirationYear, '" >';
    echo '<input type="hidden" name="security" value="', $security, '" >';

    ?>
    <input type="submit" value="この内容で登録する">
    </form>

  </div>



  <?php require 'includes/footer.php'; ?>

</body>

</html>