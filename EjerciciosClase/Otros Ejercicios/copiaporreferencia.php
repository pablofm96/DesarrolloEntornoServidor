<?php

//asignacion por copia y por referencia
$var1 = 100;
$var2 = &$var1; //Por referencia
$var3 = $var1; //Asignacion por copia
echo "var2 vale $var2 <br>";
$var2 = 300; //camvia el valor de $var2
echo "al hacerlo por referencia var1 cambia a $var1 <br>"; 
$var3 = 400; // este cambio no afecta a var1
echo "por valor no camvia var1 $var1";

?>