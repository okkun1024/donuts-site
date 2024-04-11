
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
  <title>ログアウト画面</title>

  </head>

  <body>
  <?php session_start() ?>

  <?php
  require 'includes/header.php';
 ?>


<h1 class=logout-inp-h1>ログアウト</h1>
<div class=logout-div>
  <p class=logout-p>ログアウトしますか？</p>
  <div class=logout-div2>
    <a href="logout-complete.php" class=logout-a>ログアウトする</a>
  </div>
</div>
</body>

<?php
 require 'includes/footer.php';
?>

</html>