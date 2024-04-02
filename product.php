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
<form action="product.php" method="post">

<h2>商品一覧</h2>
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

// SQL文の実行結果をHTMLで出力
foreach ($sql as $row) {
  $id = $row['id'];
  echo <<<END
<tr>
<td>{$id}</td>
<td><a href="detail.php?id={$id}">{$row['name']}</a></td>
<td>{$row['price']}</td>
</tr>
END;
}

echo '</table>';
?>
</body>

</html>