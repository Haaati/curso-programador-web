<?php

//faça um Cookie que salve o nome do usuário e exiba Bem-vindo novamente!!

setcookie("usuario","Bia", time() + 3600);

echo "Bem vindo de volta!";

?>