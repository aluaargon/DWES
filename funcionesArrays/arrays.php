<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Arrays</title>
        <meta name="author" content="Aaron"> 
    </head>
    <body>
        <?php
            $nombres = ['Bea', 'Ivan', 'Cristina', 'Victor', 'Rodrigo'];
            echo count($nombres);
            $nombresSeparadosEspacio = implode(" ", $nombres);
            echo $nombresSeparadosEspacio;
           
        ?>
    </body>
</html>