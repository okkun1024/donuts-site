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
  <link rel="stylesheet" href="common/css/purchase.css">
  <!-- タイトルここ -->
  <title>Document</title>
</head>

<body>
  <img src="common/images/shop_logo.svg" alt="c.c.donuts">
  <?php
  session_start();

  if (isset($_SESSION['customer'])) {

    echo '<h1 class="purchaseHone">ご購入確認</h1>';
    echo '<h2 class="purchaseHtwo">ご購入商品</h2>';
    foreach ($_SESSION['product'] as $id => $product) {
      $subtotal = $product['price'] * $product['count'];
      $total = 0;
      $total += $subtotal;
      $format_subtotal = number_format($subtotal);
      $format_total = number_format($total);
      echo '<div class="table_area">';
      echo '<table class="tablePurchase" style=margin:auto;>';
      echo '<tr>';
      echo '<th>商品名</th><td class="borderTleft">', $product['name'], '</td>';
      echo '</tr>';
      echo '<tr>';
      echo '<th>数量</th><td class="borderTleft">', $product['count'], '個</td>';
      echo '</tr>';
      echo '<tr>';
      echo '<th>小計</th><td class="borderTleft">税込&yen;', $format_subtotal, '</td>';
      echo '</tr>';
      echo '</table>';
      echo '</div>';
    }
    echo '<div class="table_area">';
    echo '<table class="tablePurchase" style=margin:auto;>';
    echo '<tr>';
    echo '<th>合計</th><td class="borderTleft">税込&yen;', $format_total, '</td>';
    echo '</tr>';
    echo '</table>';
    echo '</div>';


    echo '<h2 class="purchaseHtwo">お届け先</h2>';
    echo '<div class="table_area">';
    echo '<table class="tablePurchase" style=margin:auto;>';
    echo '<tr>';
    echo '<th>お名前</th><td class="borderTleft">', $_SESSION['customer']['name'], '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th>住所</th><td class="borderTleft">', $_SESSION['customer']['address'], '</td>';
    echo '</tr>';
    echo '</table>';
    echo '</div>';

    require 'includes/database.php';

    $id = $_SESSION['customer']['id'];
    $sql = $pdo->prepare('select * from card where id = ?');
    $sql->execute([$id]);
    if (!empty($sql->fetchAll())) {
      echo '<h2 class="purchaseHtwo">お支払い方法</h2>';
      $sql = $pdo->prepare('select * from card where id = ?');
      $sql->execute([$id]);
      foreach ($sql as $row) {
        $card_number = $row['card_no'];
        $number_count = mb_strlen($card_number);
        echo '<div class="table_area">';
        echo '<table class="tablePurchase" style=margin:auto>';
        echo '<tr>';
        echo '<th>お支払い</th><td class="borderTleft">クレジットカード</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>カード種類</th><td class="borderTleft">', $row['card_type'], '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>カード番号</th><td class="borderTleft">', substr($card_number, 0, 6), '●●●●●●●●●</td>';
        echo '</tr>';
        echo '</table>';
        echo '</div>';
      }
      echo '<div class="subBtn_area">';
      echo '<a href="purchase-complete.php" style="text-decoration:none;" style="color:white;" class="subBtn">ご購入を確定する</a>';
      echo '</div>';
    } else {
      echo '<h2 class="purchaseHtwo">お支払い方法</h2>';
      echo '<div clss="purchaseD">';
      echo '<p class="purchaseP">お支払方法が指定されていません。クレジットカード情報を登録してください。</p>';
      echo '</div>';
      echo '<a href="card-input.php" class="subBtn">カード情報を登録する</a>';
    }
  } else {
    echo '<p class="purchasePp">商品を購入するにはログインしてください。</p>';
    echo '<a href="login-input.php" class="subBtn">ログイン画面へ</a>';
  }


  ?>

  <?php
  require 'includes/footer.php';
  ?>
</body>

</html>


<!-- HTML出力メモ

<h1>ご購入確認</h1>

<h2>ご購入商品</h2>
<div class="item_box">
  <div class="item_name">
    <p class="divbox_1">商品名</p>
    <p class="divbox_2">CCドーナツ 当店オリジナル (5個入り)</p>
  </div>
  <div class="item_count">
    <p class="divbox_1">数量</p>
    <p class="divbox_2">1個</p>
  </div>
  <div class="item_total">
    <p class="divbox_1">小計</p>
    <p class="divbox_2">税込 &yen;1,500</p>
  </div>
</div>

<div class="total_box">
  <p class="divbox_1">合計</p>
  <p class="divbox_2">税込 &yen;1,500</p>
</div>

<h2>お届け先</h2>
<div class="address_box">
  <div class="customer_name">
    <p class="divbox_1">お名前</p>
    <p class="divbox_2">ドーナツ太郎</p>
  </div>
  <div class="customer_address">
    <p class="divbox_1">住所</p>
    <p class="divbox_2">千葉県〇〇市1-1</p>
  </div>
</div>


<h2>お支払方法</h2>
<div class="cash_box">
  <div class="payment_method">
    <p class="divbox_1">お支払い</p>
    <p class="divbox_2">クレジットカード</p>
  </div>
  <div class="card_type">
    <p class="divbox_1">カード種別</p>
    <p class="divbox_2">VISA</p>
  </div>
  <div class="card_number">
    <p class="divbox_1">カード番号</p>
    <p class="divbox_2">123456789101112</p>
  </div>
</div> -->