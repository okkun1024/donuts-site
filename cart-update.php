<?php
session_start();
if (isset($_POST['action'], $_POST['id']) && isset($_SESSION['product'][$_POST['id']])) {
    $id = $_POST['id'];
    $action = $_POST['action'];
    $product = &$_SESSION['product'][$id];

    if ($action == 'plus') {
        $product['count']++;
    } elseif ($action == 'minus' && $product['count'] > 1) {
        $product['count']--;
    }

    $product['subtotal'] = $product['price'] * $product['count'];
    $total = 0;
    foreach ($_SESSION['product'] as $item) {
        $total += $item['price'] * $item['count'];
    }

    echo json_encode(['count' => $product['count'], 'subtotal' => $product['subtotal'], 'total' => $total]);
} else {
    echo json_encode(['error' => 'Invalid request']);
}
?>