<?php

$numero1 = 100;
echo $numero1++.'<br>'; //devuelve $numero1 y luego le suma 1.
echo $numero1.'<br>';
echo $numero1--.'<br>'; //devuelve $numero1 y luego le resta 1.
echo $numero1.'<br>';
echo ++$numero1.'<br>'; //suma 1 y devuelve el valor actualizado.
echo --$numero1.'<br>'; //resta 1 y devuelve el valor actualizado.
echo ($numero1 += 5).'<br>'; //le suma 5 a la variable.
echo ($numero1 -=5).'<br>'; //le resta 5.
echo ($numero1 *=5).'<br>'; //lo multiplica por 5.
echo ($numero1 /=5).'<br>'; //lo divide entre 5.

?>