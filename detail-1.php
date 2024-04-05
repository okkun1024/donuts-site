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
  <link rel="stylesheet" href="common/css/style.css">
  <link rel="stylesheet" href="common/css/detail.css">
  <!-- 必要ならば下記のCSSを追加して -->
  <link rel="stylesheet" href="">
  <!-- タイトルここ -->
  <title>Document</title>
</head>

<body>
  <?php session_start() ?>

  <?php
  require 'includes/header.php';
  ?>

  <!-- パンくずメニュー -->
  <!-- <div class="bread_crumb">
  <p><a href="#index.php">TOP</a>＞<a href="#product.php">商品一覧</a>
</div> -->

  <div class=item_container>

    <?php
    require 'includes/database.php';
    $sql = $pdo->prepare('select * from product where id=?');
    $sql->execute([$_REQUEST['id']]);
    foreach ($sql as $row) {
      $formattedPrice = number_format($row['price']);
      echo '<form action="cart-input.php" type="method">';
      echo '<p><img alt="image" src="common/images/product_', $row['id'], '.jpg" class="detail_item_image"></p>';
      echo '<div class="flex_box">';
      echo '<p class="product_name">', $row['name'], '</p>';
      echo '<p class="product_description">', $row['description'];
      echo '</p>';
      echo '<p>', '税込 ', $formattedPrice, '</p>';
      echo '<p><i class="fa-heart fa-regular"></i></p>';
      echo '<input type="number" name="count" value="">';
      echo '<span>個</span>';
      echo '<input class="cart_btn" type="submit" value="カートに入れる">';
      echo '<input type="hidden" name="id" value="', $row['id'], '">';
      echo '<input type="hidden" name="name" value="', $row['name'], '">';
      echo '<input type="hidden" name="price" value="', $row['price'], '">';
      echo '</div>';
      echo '</form>';
    }

    ?>
  </div>

  <?php
  require 'includes/footer.php';
  ?>

</body>

</html>