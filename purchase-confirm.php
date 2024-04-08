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
  <!-- タイトルここ -->
  <title>Document</title>
</head>

<body>
  <?php
  session_start();

  if (isset($_SESSION['customer'])) {

    echo '<h1>ご購入確認</h1>';
    echo '<h2>ご購入商品</h2>';
    foreach ($_SESSION['product'] as $id => $product) {
      $subtotal = $product['price'] * $product['count'];
      $total=0;
      $total += $subtotal;
      $format_subtotal = number_format($subtotal);
      $format_total = number_format($total);
      echo '<table>';
      echo '<tr>';
      echo '<th>商品名</th><td>', $product['name'], '</td>';
      echo '</tr>';
      echo '<tr>';
      echo '<th>数量</th><td>', $product['count'], '個</td>';
      echo '</tr>';
      echo '<tr>';
      echo '<th>小計</th><td>税込\r￥', $format_subtotal, '</td>';
      echo '</tr>';
    }
    echo '<tr>';
    echo '<th>合計</th><td>税込\r￥', $format_total, '</td>';
    echo '</tr>';
    echo '</table>';

    echo '<h2>お届け先</h2>';
    echo '<table>';
    echo '<tr>';
    echo '<th>お名前</th><td>', $_SESSION['customer']['name'], '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th>住所</th><td>', $_SESSION['customer']['address'], '</td>';
    echo '</tr>';
    echo '</table>';

    require 'includes/database.php';

    $id = $_SESSION['customer']['id'];
    $sql = $pdo->prepare('select * from card where id = ?');
    $sql->execute([$id]);
    $cards = $sql->fetchAll();
    if (empty($sql->fetchAll())) {
      echo '<h2>お支払い方法</h2>';
      
      foreach ( $cards as $row) {
        $card_number=$row['card_no'];
        $number_count=mb_strlen($card_number);
        echo '<table>';
        echo '<tr>';
        echo '<th>お支払い</th><td>クレジットカード</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>カード種類</th><td>', $row['card_type'], '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>カード番号</th><td>',substr($card_number, 0, 6),'●●●●●●●●●</td>';
        echo '</tr>';
        echo '</table>';
      }
      echo '<a href="purchase-complete.php">ご購入を確定する</a>';
    } else {
      echo '<h2>お支払い方法</h2>';
      echo '<div>';
      echo '<p>お支払方法が指定されていません。クレジットカード情報を登録してください。</p>';
      echo '</div>';
      echo '<a href="card-input.php">カード情報を登録する</a>';
    }
  } else {
    echo '<p>商品を購入するにはログインしてください。</p>';
    echo '<a href="login-input.php">ログイン画面へ</a>';
  }


  ?>

  <?php
  require 'includes/footer.php';
  ?>
</body>

</html>