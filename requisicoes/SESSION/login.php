<?php

session_start();

$user = $_POST['user'];
$senha = $_POST['senha'];

if($user == "admin" && $senha == "1234"){
    $_SESSION['usuario'] = $user;

    header("location: painel.php");
    exit();
    
} else {
    echo "Usuário os senha inválidos";
}

?>