<?php

$e1 = true;
$e2 = false;
$e3 = true;

echo !$e2.'es true'.'<br>'; //Devuelve true si la expresion es falsa.
if ($e1 and $e3){ //Verdadero si las 2 expresiones son verdad
    echo "son verdaderos los dos <br>";
}else{
    echo "un valor es falso <br>";
}

if ($e1 or $e2){
    echo "uno de los 2 es verdadero <br>";
}else {
    echo "los 2 son falsos";
}
?>