<?php
session_start();
require_once('db.php');

if (isset($_GET['id'])) {
    $produto_id = $_GET['id'];

    $sql = "SELECT * FROM produtos WHERE id = $produto_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $produto = $result->fetch_assoc();

        if (!isset($_SESSION['carrinho'])) {
            $_SESSION['carrinho'] = array();
        }

        array_push($_SESSION['carrinho'], $produto);
    }
}

header("Location: index.php");
