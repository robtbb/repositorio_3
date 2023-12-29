<?php
$home1    = file_get_contents('./../html/home.html');
$about1   = file_get_contents('./../html/about.html');
$contact1 = file_get_contents('./../html/contact.html');
// Definindo as páginas e seus conteúdos
$pages = [
    'Home' => $home1,
    'About' => $about1,
    'Contact' => $contact1
];

// Obtendo a página atual da query string ou definindo como Home por padrão
$current_page = isset($_GET['page']) && array_key_exists($_GET['page'], $pages) ? $_GET['page'] : 'Home';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/formata.css">
    <title>Página Dinâmica</title>
</head>

<body>
    <header>
        <?php
        // Criando links para cada página
        foreach ($pages as $key => $value) {
            echo '<a href="?page=' . $key . '">' . ucfirst($key) . '</a>';
        }
        ?>
    </header>

    <section>
        <h2>
            <?php
            // Exibindo o conteúdo da página atual
            echo $current_page;
            ?>
        </h2>

        <div>
            <?php
            // Exibindo o conteúdo dinâmico da página atual
            echo isset($pages[$current_page]) ? $pages[$current_page] : 'Página não encontrada.';
            ?>
        </div>
    </section>

</body>

</html>