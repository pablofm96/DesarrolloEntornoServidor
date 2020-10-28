<?php

$a = 3;
$b = '3';

if ($a == $b){ //Verdadero si las 2 expresiones son iguales tras convertir tipos si es necesario.
    echo "son iguales <br>";
}else{
    echo "no son iguales <br>";
}

if ($a === $b){ //Verdadero si las 2 expresiones son del mismo tipo y tienen el mismo valor.
    echo "son identicos <br>";
}else{
    echo "no son identicos";
}