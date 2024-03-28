<?php
session_start()
?>
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
  <title>会員登録情報登録</title>
</head>

<body>
<img src="common/images/shop_logo.svg" alt="main logo" class="shop-logo">

  <?php
  $pdo = new PDO('mysql:host=localhost;dbname=donuts;charset=utf8', 'donuts', 'password');
  //入力されたメアド、IDを　＄sqlに格納

  switch (isset($_SESSION['customer'])) {
    case true;
      echo '<div><p>', '既にログイン中です。', '</p></div>';
      echo '<a href=>', 'TOPページへ戻る', '</a>';
      break;

    case false;
      //ログインしてないとき
      $sql = $pdo->prepare('select * from customer where mail=?');
      $sql->execute([$_REQUEST['mail']]);

      //格納されたデータがデータベース上にあるかどうか
      if (empty($sql->fetchAll())) {
        $sql = $pdo->prepare('insert into customer values(null,?,?,?,?,?,?)');
        $sql->execute([
          $_REQUEST['name'], $_REQUEST['kana'],$_REQUEST['post_code'],
          $_REQUEST['address'], $_REQUEST['mail'],$_REQUEST['password']
        ]);
        echo '<div>';
        echo '<h1>', '会員情報登録完了', '</h1>';
        echo '<p>', '会員登録が完了しました。', '</p>';
        echo '<a href="login-input.php">', 'ログイン画面へ進む', '</a>';
        echo '</div>';
      } else {
        echo '<div><p>このメールアドレスはすでに使用されています。</p></div>';
        echo '<a href="customer-input.php">入力ページへ戻る</a>';
      }
      break;
  }
  
  ?>

</body>

</html>