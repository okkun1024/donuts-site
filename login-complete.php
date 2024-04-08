
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
  <link rel="stylesheet" href="common/css/login,logout.css">
  <!-- タイトルここ -->
  <title>ログイン完了画面</title>
</head>

<body>

<?php
// セッションスタート
session_start();

unset ($_SESSION['customer']);
$pdo = new PDO('mysql:host=localhost;dbname=donuts;charset=utf8','donuts','password');

$sql=$pdo->prepare('select * from customer where mail=? and password=?');
$sql->execute([$_REQUEST['mail'],$_REQUEST['password']]);
foreach($sql as $row ){
  $_SESSION['customer']=[
  'id'=>$row['id'], 'name'=>$row['name'],'kana'=>$row['kana'],'post_code'=>$row['post_code'], 
  'address'=>$row['address'],'mail'=>$row['mail'],'password'=>$row['password']];
}
// セッション終了　↑ログイン処理のみ
session_write_close();

// ヘッダーによりセッションスタート
require 'includes\header.php';


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
// 出力処理↑
?>
</div>
<?php
  require 'includes\footer.php';
?>
</body>

</html>