<?php
#conecxão: inclui o arquivo db_connect.php dentro de index.php
require_once 'db_connect.php';

#sessão
session_start();

#identificar se o botão de enviar foi acionado
if (isset($_POST['btn-entrar'])) {
    $erros = array();
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if (empty($login) or empty($senha)) {
        $erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
    } else { #verificando se o login existe no banco de dados
        $sql = "SELECT login FROM usuarios WHERE login = '$login' ";
        $resultado = mysqli_query($connect, $sql);

        if (mysqli_num_rows($resultado) > 0) {
            //para que de certo é preciso despiqtografar a senha meu filho
            $senha = md5($senha);
            $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
            $resultado = mysqli_query($connect, $sql);

            if (mysqli_num_rows($resultado) == 1) {
                $dados = mysqli_fetch_array($resultado);
                $_SESSION['logado']     = true;
                $_SESSION['id_usuario'] = $dados['id'];
                header('Location: home.php');
            } else {
                $erros[] = "<li>Usuário e senha não conferem</li>";
            }
        } else {
            $erros[] = "<li>Usuário inexistente</li>";
        }
    }
}

if (isset($_POST['cadastro'])) {
    header('Location: cadastro.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/formata-login.css">
    <title>Document</title>
</head>

<body>
    <h1>Vem pro fut, vem pro fut</h1>
    <!--verificando se há algum erro-->
    <?php
    #perceba que essa função empty verifica se a  varivel esa fazia 
    #se a variavel erro não estivar vazia esse if vai ser execultado
    #perceba que essa condição ja é avaliada la em cima

    if (!empty($erros)) {
        foreach ($erros as $ERRO) {
            echo $ERRO;
        }
    }
    ?>

    <form action="?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <fieldset>
            <legend>Sistema de login</legend>
            <label class="titulo">Mario Bros</label><br><br>
            <label class="alinha">Login:</label>
            <input type="text" name="login"><br>
            <label class=alinha>Senha:</label>
            <input type="password" name="senha"><br>

            <div>
                <button type="submit" name="btn-entrar">Entrar</button>
                <button type="submit" name="cadastro">Cadastrar</button>
            </div>
        </fieldset>
    </form>
</body>

</html>

<!--
    #############################
    ####### REQUIRE_ONCE ########
    #############################
    O “require” inclui os arquivos independentemente de o arquivo já ter sido incluído na página da web ou não. Se o arquivo não for encontrado, o script será parado de executar e retornará um “fatal error”.
    
    O “require_once” só irá incluir o arquivo se não houver uma chamada anterior do mesmo. Isso evita possíveis problemas como variáveis sobre escritas ou que funções e classes sejam redeclaradas causando um erro no código.

    ###############################
    ## mysqli_real_escape_string ##
    ###############################
    é uma função do PHP que escapa caracteres especiais em uma string para uso em uma instrução SQL12. Ela é usada para evitar ataques de injeção de SQL, que ocorrem quando um invasor insere código malicioso em uma instrução SQL. A função é usada para escapar as variáveis ​​que serão usadas em uma instrução SQL, como nomes de usuário e senhas1.

    ######################
    ####### empty ########
    ######################
    A função empty serve para verificar se uma variável é vazia12. Ela retorna true (verdadeiro) quando uma variável é vazia e false (falso) quando uma variável não é vazia
-->