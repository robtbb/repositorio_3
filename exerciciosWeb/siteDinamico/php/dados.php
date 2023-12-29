<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

<body>
    <?php

    if (isset($_POST['cardapio'])) {
        require "./../includes/cardapio.inc.php";
    }

    if (isset($_POST['reserva'])) {
        require "./../includes/reserva.inc.php";
    }

    ?>
</body>

</html>