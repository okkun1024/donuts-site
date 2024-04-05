
<?php
session_start();

// カートに商品を追加
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}


?>

<?php

  require 'cart.php';
 
  ?>


