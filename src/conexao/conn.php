<?php

ini_set('display_erros', true);
error_reporting(E_ALL);

$hostname = "localhost";
$database = "minhasnotas";
$username = "root";
$password = "";

if($conecta = mysqli_connect($hostname, $username, $password, $database)){
    //echo "Conexão com o banco de dados ".$database.", efetuado com sucesso!";
}

else{
    //echo "Erro: ".mysqli_connect_error();
}