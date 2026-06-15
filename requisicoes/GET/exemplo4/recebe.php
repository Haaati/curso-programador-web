<?php

$n1 = $_GET ['number1'];
$n2 = $_GET ['number2'];
$ope = $_GET ['ope'];

switch ($ope) {
    case 1:
        $soma = $n1 + $n2;
        echo "O resultado da soma é: " . $soma;
        break;
    case 2:
        $subt = $n1 - $n2;
        echo "O resultado da subtração é: " . $subt;
        break;
    case 3:
        $mult = $n1 * $n2;
        echo "O resultado da multiplicação é: " . $mult;
        break;
    case 4:
        $div = $n1 / $n2;
        echo "O resultado da soma é: " . $div;
        break;
    default:
        echo "Insira uma operação válida";
}

?>