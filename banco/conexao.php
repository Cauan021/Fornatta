<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "fornatta";

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if (!$conexao) {
    die("Erro ao conectar ao banco.");
}

?>