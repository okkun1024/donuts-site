
<?php
session_start();

// カートに商品を追加
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// 商品情報をPOSTから取得
if (isset($_REQUEST['id'], $_POST['name'], $_POST['price'])) {
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $price = $_REQUEST['price'];
    $count = $_REQUEST['count']; // 数量

    // カートに商品がすでに存在するかチェック
    if (isset($_SESSION['cart'][$id])) {
        // 存在する場合は数量を更新
        $_SESSION['cart'][$id]['count'] += $count;
    } else {
        // 存在しない場合は新たに商品情報を追加
        $_SESSION['cart'][$id] = array(
            'id' => $id,
            'name' => $name,
            'price' => $price,
            'count' => $count
        );
    }
}


?>

<?php

  require 'cart.php';
 
  ?>


