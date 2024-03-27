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
  <link rel="stylesheet" href="">
  <!-- タイトルここ -->
  <title>ログイン完了画面</title>
</head>

<body>
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
  echo;
}

?>

</body>

</html>