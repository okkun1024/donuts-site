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



if(!empty($_SESSION['product'])){
  foreach ($_SESSION['product'] as $id => $product) {
    $formattedPrice = number_format($product['price']);
  echo<<<END
  <img src="common/images/product_{$id}.jpg" alt="{$product['name']}">
  <p class="product_name">{$product['name']}</p>
  <p class="product_price">税込 &yen;{$formattedPrice}</p>
  <p class="">{$product['count']}</p>
  <a href="cart-delete.php?id={$id}">削除する</a>

  END;

  }
  $subtotal=$product['price']*$product['count'];
  $total=0;
  $total+=$subtotal;

  $formattedPrice=number_format($total);
  echo<<<END
  <div>
    <p>ご注文合計：税込&yen;{$formattedPrice}</p>
  </div

  END;

}else{
  echo '<p>カートに商品がありません。</p>';
}



?>