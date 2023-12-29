<?php
session_start();

if (isset($_GET['id'])) {
    $produto_id = $_GET['id'];

    foreach ($_SESSION['carrinho'] as $index => $produto) {
        if ($produto['id'] == $produto_id) {
            unset($_SESSION['carrinho'][$index]);
            break;
        }
    }
}

header("Location: index.php");
