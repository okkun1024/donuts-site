<?php require 'includes/header.php'; ?>


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v6.5.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="common/css/reset.css">
  <!-- 必要ならば下記のCSSを追加して -->
  <link rel="stylesheet" href="">

  <!-- タイトルここ -->
  <title>Document</title>
</head>


<!-- カートの商品の削除ボタンを押した際に削除される仕組み -->

<html>
<body>

<?php
echo <<<END
<main>

<ul>
<li><a href="index.php">top</a></li>
<li>></li>
<li>カート</li>
</ul>

<hr>
END;

if (isset($_SESSION['customer'])) {
// ログインしている

echo '<p>ようこそ　',$_SESSION['customer']['name'],'様</p> ';

}else{
  // ログアウトしている
echo '<p class="id_name_no_cart">ようこそ　ゲスト様</p> ';
}

echo '<hr>';


// 指定idの勝因をカートから削除
unset($_SESSION['product'][$_REQUEST['id']]);
// unset($_SESSION['product']);

// var_dump ($_SESSION['product']);
// var_dump ($_REQUEST['id']);

echo '<p id="input_delete">カートから商品を削除しました。</p>';


require 'cart.php';

echo '</main>';

?>

</body>
</html>


<?php require 'includes/footer.php'; ?>