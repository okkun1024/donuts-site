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
  <link rel="stylesheet" href="">
  <!-- タイトルここ -->
  <style>
    h1 {
      /* 見出しの調整・変更 */
      margin-top: 40px;
      margin-bottom: 60px;
      text-align: center;
      font-size: 20px;
      color: #7F5539;
    }

    .comPlete {
      width: 80%;
      border: 1px solid #B392AC;
      margin: 0 auto;
      margin-bottom: 360px;
    }

    .comPletep {
      text-align: center;
      padding: 20px 0 20px;
      font-size: 12px;
    }

    .comPletea {
      display: block;
      text-align: center;
      padding-bottom: 20px;
      text-decoration: underline;
      font-size: 12px;
      color: #7F5539;
    }
  </style>
  <title>カード情報登録完了</title>
</head>

<body>
  <?php session_start(); ?>
  <img src="common/images/shop_logo.svg" alt="c.c.donuts">

  <?php

  // require 'database.php';
  $pdo = new PDO(
    'mysql:host=localhost;dbname=donuts;charaset=utf8',
    'donuts',
    'password'
  );

  $id = $_SESSION['customer']['id'];
  $sql = $pdo->prepare('select * from card where id=?');
  $sql->execute([$id]);
  // if (empty($sql->fetchAll())) {
  $sql = $pdo->prepare('insert into card values(?,?,?,?,?,?,?)');
  $sql->execute([$_SESSION['customer']['id'], $_REQUEST['name'], $_REQUEST['card'], $_REQUEST['cardNumber'], $_REQUEST['cardExpirationMonth'], $_REQUEST['cardExpirationYear'], $_REQUEST['security']]);
  echo '<h1>カード情報登録完了</h1>';
  echo '<div class="comPlete">';
  echo '<p class="comPletep">クレジットカード情報を登録しました。</p>';
  echo '<a href="purchase-confirm.php" class="comPletea">購入手続きを続ける</a>';
  echo '</div>';
  // }
  // else {
  //   echo '<div class="comPlete">';
  //   echo '既にカード情報があります。';
  //   echo '</div>';
  //   echo '<a href="index.php">TOPに戻る</a>';
  // }






  // echo '<h1>カード情報登録完了</h1>';

  // <div class="comPlete">

  //   echo '<p>クレジットカード情報を登録しました。</p>';
  //   echo '<a href="purchase-confirm.php">購入手続きを続ける</a>';
  ?>


  </div>

  <?php require 'includes/footer.php'; ?>
</body>

</html>