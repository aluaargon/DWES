<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Cadenas</title>
        <meta name="author" content="Aaron"> 
    </head>
    <body>
        <?php
            // Ejercicio 1
            $nombre = $_GET["nombre"]?? "Aaron";
            $nombreTrim = trim($nombre, '/');
            echo "Nombre con el trim: " . $nombreTrim;
           ?>
    </body>
</html>