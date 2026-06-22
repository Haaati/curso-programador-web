<?php

$host = "localhost";
$usuario = "root";
$senha = "1234"; //aqui você vai colcoar a senha do banco de dados
$banco = "senac";

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if (!$conexao){
    die("Erro na conexão com o banco!");
}