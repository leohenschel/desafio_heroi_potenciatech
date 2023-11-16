<?php

//variaveis usadas para conexão com o bd
$hostname = "localhost";
$bancodedados = "login_finin";
$usuario = "root";
$senha = "";

// variável para conexão com objeto passando parametros de conexão
$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

if ($mysqli->connect_errno){ //condição para verificar se existe algum erro
    die ("Falha ao conectar ao banco de dados: " . $mysqli->error); //caso der erro sera exibido o metodo die
}

?>