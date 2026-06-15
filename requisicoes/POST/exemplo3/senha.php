<?php

$user = $_POST ['user'];
$senha = $_POST ['senha'];

if ($user == 'admin' && $senha == 1234) {
    echo "Bem vindo ao sistema!";
} else {
    echo "Usuário ou senha incorreto!";
}