<?php include 'Includes/cabecera.php';?>
    <!-- Contenido -->
    <div>
        <h1>Paginia de inicio</h1>
        <p>Texto de prueba de la pagina de inicio</p>
    </div>
<?php //include 'includes/pie.php';
/* PEro tambien podemos hacerlo teniendo en cuenta que si un fichero A incluye el otro B las rutas relativas que aparecen se interpretan
a partir del directorio de A. Por ello usamos dirname(__FILE__) que devuelve la ruta del fichero*/
include (dirname(__FILE__))."\includes\pie.php";
/* si en lugar de include usamos require sera mas estricto*/