<?php session_start() ?>
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
    .log-comp h1{
      text-align: center;
      margin:32px 0 60px 0 ;
      color:#7F5539;
    } 
    .log-comp div{
      margin: 0 auto;
      border: 2px solid #E8C2CA;
      width:89%;
      padding: 36px 0 36px 0;
    }
    .log-comp div p{
      text-align: center;
      color:#7F5539;
    }
    .relog{
      width:89%;
      margin: 0 auto;
    }
    .log-comp p a{
      display: block;
      text-align: right;
      margin-top:24px;
      margin-bottom:80px;
      text-decoration: underline;
      color:#7F5539;
    }
  </style>
  <!-- タイトルここ -->
  <title>ログイン完了画面</title>
</head>

<body>
<?php
  require 'includes\header.php';
  ?>
<?php
unset ($_SESSION['customer']);
$pdo = new PDO('mysql:host=localhost;dbname=donuts;charset=utf8','donuts','password');

$sql=$pdo->prepare('select * from customer where mail=? and password=?');
$sql->execute([$_REQUEST['mail'],$_REQUEST['password']]);
foreach($sql as $row ){
  $_SESSION['customer']=[
  'id'=>$row['id'], 'name'=>$row['name'],'kana'=>$row['kana'],'post_code'=>$row['post_code'], 
  'address'=>$row['address'],'mail'=>$row['mail'],'password'=>$row['password']];
}
if(isset($_SESSION['customer'])){
  echo'<div class=log-comp>';
  echo '<h1>','ログイン完了','</h1>';
  echo '<div><p>','ログインが完了しました。','</div></p>';
  echo '<p class=relog><a href="index.php">','TOPページへ戻る','</a></p>';
}else{
  echo'<div class=log-comp>';
  echo '<h1>','ログイン失敗','</h1>';
  echo '<div><p>','ログインに失敗しました。もう一度やり直してください。','</div></p>';
  echo '<p class=relog><a href="login-input.php">','ログインページへ戻る','</a></p>';
}
?>
</div>
<?php
  require 'includes\footer.php';
?>
</body>

</html>