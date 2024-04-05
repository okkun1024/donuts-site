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
  <!-- javascript -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="common/js/animation.js"></script>
  <!-- タイトルここ -->
  <title>Document</title>
</head>

<!-- 内容の表示 -->
<body>
    



<main>

    <ul>
        <li><a href="index.php">top</a></li>
        <li>></li>
        <li>カート</li>
    </ul>


<hr>

<?php

if (isset($_SESSION['customer'])) {
// ログインしている


    echo '<p>ようこそ　',$_SESSION['customer']['name'],'様</p> ';
}else{

    echo '<p class="id_name_no_cart">ようこそ　ゲスト様</p> ';
}


?>
    <hr>


<?php
require 'cart.php';
?>


</main>



</body>
</html>

<?php require 'includes/footer.php'; ?>