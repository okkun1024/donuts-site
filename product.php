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
  <link rel="stylesheet" href="common/css/product.css">
  <!-- javascript -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="common/js/animation.js"></script>
  <!-- タイトルここ -->
  <title>Document</title>
</head>

<?php
session_start();
?>

<?php
require 'includes/header.php';
?>

<body>
    <?php

    // データベース接続
    require 'includes/database.php';

    // フォームの入力値がセットされているか判定
    if (isset($_REQUEST['keyword'])) {
      // セットされている場合、入力値あり
      // productテーブル内で部分一致するレコードを取得
      $sql = $pdo->prepare('select * from product where name like ?');
      $sql->execute(['%' . $_REQUEST['keyword'] . '%']);
    } else {
      // セットされていない場合、入力値なし
      // productテーブルのすべてのレコードを取得
      $sql = $pdo->query('select * from product');
    }
    echo  '<h2 class="fade_Up">商品一覧</h2>';
    echo '<div class="product_box">';

    $counter = 0;
    // SQL文の実行結果をHTMLで出力
    foreach ($sql as $row) {
      $id = $row['id'];
      $category = $row['category'];
      if ($counter >= 6) {
        break;
      }

      // 価格を3桁ごとにカンマで区切る
      $formattedPrice = number_format($row['price']);

      echo <<<END
  <div class="item_box_1 fade_Up">
    <a href="detail-{$category}.php?id=$id">
      <img src="common/images/product_{$id}.jpg" alt="{$row['name']}">
    </a>
    <p class="product_name">{$row['name']}
      </p>
      <div class="price_container">
        <p class="product_price">税込 &yen;{$formattedPrice}
            </p>
            <p><i class="fa-regular fa-heart"></i></p>
      </div>
    <form action="cart-input.php" method="post">
    <input type="hidden" name="name" value="{$row['name']}">
    <input type="hidden" name="price" value="{$row['price']}">
    <input type="hidden" name="id" value="{$row['id']}">
    <input type="hidden" name="count" value="1">
    <div class="button_area">
      <input class="button" type="submit" value="カートに入れる">
    </div>
    </form>
  </div>
END;
      $counter++;
    }
    // product_boxの終了タグ
    echo '</div>';

    echo '<h2 class="variety_title fadeUpTrigger">バラエティセット</h2>';
    echo '<div class="product_box_2">';

    $counter2 = 0;
    // $stmt は PDOStatement オブジェクトと仮定
    $sql = $pdo->query('select * from product');

    // PDOStatement オブジェクトからデータを配列として取得
    $results = $sql->fetchAll(PDO::FETCH_ASSOC);

    // 取得した配列を array_slice() に渡す
    $slicedResults = array_slice($results, 6);

    foreach ($slicedResults as $row) {
      $id = $row['id'];
      $category = $row['category'];
      if ($counter2 >= 6) {
        break;
      }


      echo <<<END
  <div class="item_box_2  fadeUpTrigger">
    <a href="detail-{$category}.php?id=$id">
      <img src="common/images/product_{$id}.jpg" alt="{$row['name']}">
    </a>
  
    <p class="product_name">{$row['name']}
      </p>
      <div class="price_container">
        <p class="product_price">税込 &yen;{$formattedPrice}
            </p>
            <p><i class="fa-regular fa-heart"></i></p>
      </div>
    <form action="cart-input.php" method="post">
      <input class="button" type="submit" value="カートに入れる">
    </form>
  </div>
  

END;
      $counter2++;
    }
    echo '</div>';


    ?>
    <?php require 'includes/footer.php'; ?>
</body>

</html>