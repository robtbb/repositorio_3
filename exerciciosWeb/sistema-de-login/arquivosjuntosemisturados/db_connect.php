<?php
#conexão com banco de dados
$servername = "localhost";
$username   = "root";
$password  = "";
$db_name    = "sistemadelogin";

$connect    = mysqli_connect($servername, $username, $password, $db_name);


//verificando se existe algum erro
//caso tenha algum erro, entra nessa condição
//e mostra a mensagem falha na conexão e oque 
//esta dentro de mysqli_connect_error();
if (mysqli_connect_error()) {
    echo "Falha na conexão: " . mysqli_connect_error();
}
