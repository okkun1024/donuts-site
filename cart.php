<!-- サーバーの登録商品データを読み取る -->

<?php

// データベースのカート内を確認
if (!empty($_SESSION['product'])) {

    // 商品データがある場合

    // 合計金額計算用の変数設定
    $total = 0;

    // データベースのカート内情報を呼び出し
    // productテーブル内の各商品データの変数$idを変数$productに変更(他のデータと重複しないため)
    foreach ($_SESSION['product'] as $id => $product) {

        // 各商品データごとに　価格×個数を変数に保管
        $subtotal = $product['price'] * $product['count'];

        //合計金額
        $total += $subtotal;

        $id_number=intval($id);
        $formattedPrice = number_format($product['price']);

        echo <<< END
<div class="cart_show_container">
        <img src="common/images/product_{$id}.jpg" alt="商品画像">
    
        <div class="item_container">
            <p class="item_name">{$product['name']}</p>

            <div class="item_info">
                <p class="item_price">税込 &yen;{$formattedPrice}</p>
                <p class="item_count">数量　{$product['count']}個</p>
            </div>
            <div class="item_delete">
                <a href="cart-delete.php?id={$id_number}">削除する</a>
            </div>
        </div>
</div>
END;

    }
    $totalPrice = number_format($total);

    echo <<< END

<div class="total_price">
        <p>ご注文合計：税込&yen;{$totalPrice}</p>
    
       <p><a href="purchase-confirm.php">ご購入確認へ進む</a></p>
</div>
   
    <p class="continu_btn"> <a  href="product.php">買い物を続ける</a></p>
END;
} else {

    // 商品データがない場合
    echo '<p class="name_no_cart">カートに商品がありません。</p>';
}


?>