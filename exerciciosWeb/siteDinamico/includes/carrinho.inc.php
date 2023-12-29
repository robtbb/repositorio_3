<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
</head>

<body>
    <h1>Produtos Disponíveis</h1>
    <ul>
        <?php
        require_once('db.php');

        $sql = "SELECT * FROM produtos";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<li>" . $row["nome"] . " - R$" . $row["preco"] . " <a href='adicionar.php?id=" . $row["id"] . "'>Adicionar ao Carrinho</a></li>";
            }
        } else {
            echo "Nenhum produto disponível.";
        }

        $conn->close();
        ?>
    </ul>

    <h1>Carrinho de Compras</h1>
    <ul>
        <?php
        session_start();

        if (isset($_SESSION['carrinho'])) {
            foreach ($_SESSION['carrinho'] as $produto) {
                echo "<li>" . $produto['nome'] . " - R$" . $produto['preco'] . " <a href='remover.php?id=" . $produto['id'] . "'>Remover</a></li>";
            }
        } else {
            echo "Carrinho vazio.";
        }
        ?>
    </ul>
</body>

</html>