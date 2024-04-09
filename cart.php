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
        <div class="total_price_checkbox">    
            <p class="total_title">ご注文合計：<span>税込&yen;{$totalPrice}</span></p>    
            <button onclick="location.href='purchase-confirm.php'" class="button">ご購入確認へ進む</button>
        </div>
    </div>
    <div class="continue_box">
        <button onclick="location.href='product.php'" class="continue_btn">買い物を続ける</button>
    </div>

END;
} else {

    // 商品データがない場合
    echo '<p class="cart_none">カートに商品がありません。</p>';
}

?>