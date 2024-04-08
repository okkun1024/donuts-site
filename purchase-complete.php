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
  <link rel="stylesheet" href="common/css/purchase-complete.css">
  <!-- タイトルここ -->
  <title>Document</title>
</head>

<body>

  <?php
  session_start();
  ?>

  <img src="common/images/shop_logo.svg" alt="main logo" class="main-logo">
  <?php
  require 'includes/database.php';
  if(isset($_SESSION['product'])){
  $purchase_id = 1;
  foreach ($pdo->query('select max(id) from purchase') as $row) {
    $purchase_id = $row['max(id)'] + 1;
  }
  $sql = $pdo->prepare('insert into purchase values(?,?)');
  if ($sql->execute([$purchase_id, $_SESSION['customer']['id']])) {
    foreach ($_SESSION['product'] as $product_id => $product) {
      $sql = $pdo->prepare('insert into purchase_detail values(?,?,?)');
      $sql->execute([$purchase_id, $product_id, $product['count']]);
    }
    unset($_SESSION['product']);
    echo '<h1>ご購入完了</h1>';
    echo '<div class=purch_comp_div>';
    echo '<p class=purch_textA>ご購入が完了しました。</p>';
    echo '<p class=purch_textB>今後ともご愛顧の程、宜しくお願いいたします。</p>';
    echo '</div>';
    echo '<p class=purch_comp_p><a href="index.php" class=purch_a>TOPページへ戻る</a></p>';
  } else {
    echo '購入手続き中にエラーが発生しました。申し訳ございません。';
  }
}else{
  echo '<h1>ご購入完了</h1>';
  echo '<div class=purch_comp_div>';
  echo '<p class=purch_textA>ご購入が完了しました。</p>';
  echo '<p class=purch_textB>今後ともご愛顧の程、宜しくお願いいたします。</p>';
  echo '</div>';
  echo '<p class=purch_comp_p><a href="index.php" class=purch_a>TOPページへ戻る</a></p>';
}

  require 'includes/footer.php'
  ?>
</body>

</html>