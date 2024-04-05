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
</head>

<?php



// if(!empty($_SESSION['cart'])){
//   foreach ($_SESSION['product'] as $id => $product) {
//     $formattedPrice = number_format($product['price']);
//   echo<<<END
//   <img src="common/images/product_{$id}.jpg" alt="{$product['name']}">
//   <p class="product_name">{$product['name']}</p>
//   <p class="product_price">税込 &yen;{$formattedPrice}</p>
//   <p class="">{$product['count']}</p>
//   <a href="cart-delete.php?id={$id}">削除する</a>

//   END;

//   }
//   $subtotal=$product['price']*$product['count'];
//   $total=0;
//   $total+=$subtotal;

//   $formattedPrice=number_format($total);
//   echo<<<END
//   <div>
//     <p>ご注文合計：税込&yen;{$formattedPrice}</p>
//   </div

//   END;

// }else{
//   // echo '<p>カートに商品がありません。</p>';
// }

// カートの内容を表示
$totalQuantity = 0; // 合計数量
$totalPrice = 0; // 合計金額

echo "<h2>カート内の商品</h2>";

if (!empty($_SESSION['cart'])) {
    echo "<ul>";
    foreach ($_SESSION['cart'] as $item) {
        $totalQuantity += $item['count'];
        $totalPrice += $item['price'] * $item['count'];
        echo "<li>{$item['name']}{$item['price']}円 x {$item['count']}</li>";
        // 削除フォーム
        echo "<form action='' method='post'>";
        echo "<input type='hidden' name='deleteId' value='{$item['id']}'>";
        echo "<input type='submit' name='delete' value='削除'>";
        echo "</form>";
    }
    echo "</ul>";
    echo "<p>合計数量: $totalQuantity</p>";
    echo "<p>合計金額: $totalPrice 円</p>";
} else {
    echo "<p>カートは空です。</p>";
}

// ここで、商品リストページや他のページへのリンクを提供することも考えられます
// 例: echo "<a href='product-list.php'>商品リストに戻る</a>";

?>