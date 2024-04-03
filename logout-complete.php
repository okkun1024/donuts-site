
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
    .logout-wrpper h1{
      text-align: center;
      margin:32px 0 60px 0 ;
      color: #7F5539;
    }
    .logout-wrpper div{
      margin: 0 auto;
      border: 2px solid #E8C2CA;
      width:89%;
      padding: 36px 0 36px 0;
      margin-top:60px
    }
    .logout-wrpper div p{
      text-align: center;
    }
    .relog{
      width:89%;
      margin: 0 auto;
    }
    .logout-wrpper p a{
      display: block;
      text-align: right;
      margin-top:24px;
      margin-bottom:80px;
      text-decoration: underline;
      color: #7F5539;
    }
    .else-div{
      margin-top: 36px;
    }
  </style>
  <!-- タイトルここ -->
  <title>ログアウト</title>
</head>

<body>

<?php
session_start();

if(isset($_SESSION['customer'])){
  unset($_SESSION['customer']);
}
session_write_close();

require'includes/header.php';

if(isset($_SESSION['customer'])){
  echo '<div class="logout-wrpper">';
  echo '<h1>','ログアウト完了','</h1>';
  echo '<div class="login-com-div"><p class="">','ログアウトが完了しました。','</div></p>';
  echo '<p class=relog><a href="index.php">','TOPページへ戻る','</a></p>';
}else{
  echo '<div class="logout-wrpper">';
  echo '<div class=else-div><p>','すでにログアウトしています。','</p></div>';
  echo '<p class=relog><a href="index.php">','TOPページへ戻る','</a></p>';
}


?>


</div>

<?php require'includes/footer.php';?>
</body>

</html>