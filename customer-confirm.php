
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
  <link rel="stylesheet" href="common/css/customer-comp.css">
  <!-- タイトルここ -->
  <title>ご入力情報確認</title>
</head>

<body>
<a href="index.php"><img src="common/images/shop_logo.svg" alt="main logo" class="shop-logo"></a>
<div class="wrpper">
<h1>ご入力内容の確認</h1>

<?php

echo '<p class="title-confirm">お名前</p>';
echo '<p class="content-confirm">',htmlspecialchars($_REQUEST['name']),'</p>';

echo '<p class="title-confirm">お名前(フリガナ)</p>';
echo '<p class="content-confirm">',htmlspecialchars($_REQUEST['kana']),'</p>';

echo '<p class="title-confirm">郵便番号</p>';
echo '<p class="content-confirm">',htmlspecialchars($_REQUEST['post_code']),'</p>';

echo '<p class="title-confirm">住所</p>';
echo '<p class="content-confirm">',htmlspecialchars($_REQUEST['address']),'</p>';

echo '<p class="title-confirm">メールアドレス</p>';
echo '<p class="content-confirm">',htmlspecialchars($_REQUEST['mail']),'</p>';

echo '<p class="title-confirm">パスワード</p>';
$pass=mb_strlen(htmlspecialchars($_REQUEST['password']));
for($i=0; $i <= $pass ; $i++){
  echo '<span class=passflex>●</span>';
}

$name=$kana=$post_code=$address=$mail=$password='';
$name=htmlspecialchars($_REQUEST['name']);
$kana=htmlspecialchars($_REQUEST['kana']);
$post_code=htmlspecialchars($_REQUEST['post_code']);
$address=htmlspecialchars($_REQUEST['address']);
$mail=htmlspecialchars($_REQUEST['mail']);
$password=htmlspecialchars($_REQUEST['password']);
echo '<form action="customer-complete.php" method="post">';
echo '<input type=hidden name="name" value="',$name,'">';
echo '<input type=hidden name="kana" value="',$kana,'">';
echo '<input type=hidden name="post_code" value="',$post_code,'">';
echo '<input type=hidden name="address" value="',$address,'">';
echo '<input type=hidden name="mail" value="',$mail,'">';
echo '<input type=hidden name="password" value="',$password,'">';
?>

<input type="submit" value="この内容で登録する">
</form>
</div>

<?php require 'includes/footer.php' ?>
</body>


</html>