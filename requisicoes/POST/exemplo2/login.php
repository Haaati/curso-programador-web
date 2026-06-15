<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];
$curso = $_POST['curso'];

echo "Bem vindo " . $nome . "!<br>" . "<br>Dados de usuário: <br>" . "Email: " . $email . "<br>Idade: " . $idade . "<br>Curso: " . $curso;
?>