<?php

// las variables superglobales estan disponibles en todos los ambitos
//Variables de servidor
echo "la ip de mi servidor:  ".$_SERVER['SERVER_ADDR'].'<br>';
echo "nombre del servidor:  ".$_SERVER['SERVER_NAME'].'<br>';
echo "software del servidor:  ".$_SERVER['SERVER_SOFTWARE'].'<br>';
echo "protoco: ".$_SERVER['SERVER_PROTOCOL'].'<br>';
echo "metodo de peticion:  ".$_SERVER['REQUEST_METHOD'].'<br>';
echo "ruta dentro de htdocs:  ".$_SERVER['PHP_SELF'].'<br>';
echo "mi navegador:  ".$_SERVER['HTTP_USER_AGENT'];