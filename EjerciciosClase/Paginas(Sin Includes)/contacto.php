<!DOCTYPE html>
<html>
    <head>
        <title>Includes en PHP</title>
        <meta charset="UTF-8">
    </head>
    
    <body>
    
    <!-- Cabecera -->
    <div class="cabecera">
        <h1> Includes PHP 7</h1>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="sobremi.php">Sobre mi</a></li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
        <hr/>

        <!-- Contenido -->
        <div>
            <h2> Esta es la pagina de contacto</h2>
            <p>Texto de prueba de la pagina</p>
        </div>

        <!-- Pie de pagina -->
        <footer>
            <hr/>
            Todos los derechos reservados <?= date('Y')?>
        </footer>
    </body>
</html>