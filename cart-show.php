<?php
session_start();
?>
<?php require 'includes/header.php'; ?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="common/css/reset.css">
    <link rel="stylesheet" href="common/css/cart.css">

    <title>Cart-Product list page</title>

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


    echo '<p class="id_name_no_cart">ようこそ',$_SESSION['customer']['name'],'様</p> ';
}else{

    echo '<p class="id_name_no_cart">ようこそゲスト様</p> ';
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