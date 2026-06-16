<?php

//cria um cookie do usuário Leonardo, com tempo determinado para 1h

setcookie("usuario","Leonardo", time() + 3600);

echo "Cookie criado";

?>