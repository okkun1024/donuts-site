<?php
require 'includes/header.php';
?>
<?php

// カートの内容を表示
$totalQuantity = 0; // 合計数量
$totalPrice = 0; // 合計金額

if (!empty($_SESSION['cart'])) {
    echo "<ul>";
    foreach ($_SESSION['cart'] as $item) {
        $totalQuantity += $item['count'];
        $totalPrice += $item['price'] * $item['count'];
        echo "<li>{$item['name']}{$item['price']}円 x {$item['count']}</li>";
        // 削除フォーム
        echo "<form action='cart-delete.php' method='post'>";
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


?>

<?php
 require 'includes/footer.php';
  ?>