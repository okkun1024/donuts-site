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

<body>
<?php
  require 'includes/database.php';
  $sql=$pdo->prepare('select * from product where id=?');
  $sql->execute([$_REQUEST['id']]);
  foreach($sql as $row){
    $formattedPrice = number_format($row['price']);
    echo '<form action="" type="method">';
    echo '<p><img alt="image" src="common/images/product_',$row['id'],'.jpg"></p>';
    echo '<p>',$row['name'];
    echo '<p>',$row['description'];
    echo '<br>税込 &bsol;',$formattedPrice;
    echo '</p>';
    echo '<p><i class="fa-heart"></i></p>';
    echo '<input type="number" name="count" value="">';
    echo '<form action="cartinput.php" method="post">';
    echo '<input class="cart_btn" type="button" value="カートに入れる">';
    echo '<input type="hidden" name="id" value="',$row['id'],'">' ;
    echo '<input type="hidden" name="name" value="',$row['name'],'">' ;
    echo '<input type="hidden" name="price" value="',$row['price'],'">' ;
  }
?>

</body>

</html>