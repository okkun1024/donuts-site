<?php
if (!empty($_SESSION['product'])) {
    $total = 0;
    foreach ($_SESSION['product'] as $id => $product) {
        $subtotal = $product['price'] * $product['count'];
        $total += $subtotal;
        $id_number = intval($id);
        $formattedPrice = number_format($product['price']);
        $formattedSubtotal = number_format($subtotal);

        echo <<<END
<div class="cart_show_container">
    <img src="common/images/product_{$id}.jpg" alt="商品画像">
    <div class="item_container">
        <p class="item_name">{$product['name']}</p>
        <div class="item_info">
            <p class="item_price">税込 &yen;{$formattedPrice}</p>
           
            <p id="subtotal_{$id_number}" class="subtotal">小計 &yen;{$formattedSubtotal}</p>
        </div>
        <div class="quantity_controls">
            <div class="btn_controls">
                <button onclick="updateItemCount('plus', {$id_number}, '{$id_number}_count', {$product['price']})" class=count-btns>+</button>
                <span id="{$id_number}_count" class="item_count">{$product['count']}</span>
                <button onclick="updateItemCount('minus', {$id_number}, '{$id_number}_count', {$product['price']})" class=count-btns>-</button>個
            </div>
            
        </div>
        <div class="item_delete">
            <a href="cart-delete.php?id={$id_number}">削除する</a>
        </div>
    </div>
</div>
END;
    }
    $totalPrice = number_format($total);
    echo <<<END
<div class="total_price">
    <p class="total_title">ご注文合計：<span id="total_price">税込&yen;{$totalPrice}</span></p>
    <button onclick="location.href='purchase-confirm.php'" class="button">ご購入確認へ進む</button>
</div>
<div class="continue_box">
    <button onclick="location.href='product.php'" class="continue_btn">買い物を続ける</button>
</div>
END;
} else {
    echo '<p class="cart_none">カートに商品がありません。</p>';
}
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
function updateItemCount(action, id, countId, price) {
    $.ajax({
        url: 'cart-update.php',
        type: 'POST',
        data: {action: action, id: id},
        success: function(response) {
            var data = JSON.parse(response);
            if (!data.error) {
                document.getElementById(countId).innerText = data.count;  // 更新された数量を表示
                // 小計の更新、フォーマットを確実に適用
                document.getElementById(`subtotal_${id}`).innerText = `小計: ￥${new Intl.NumberFormat('ja-JP').format(data.subtotal)}`;
                // 合計金額の更新、フォーマットを確実に適用
                document.getElementById('total_price').innerText = `税込￥${new Intl.NumberFormat('ja-JP').format(data.total)}`;
            } else {
                alert('Error: ' + data.error);
            }
        }
    });
}
</script>