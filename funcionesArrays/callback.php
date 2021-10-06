<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Arrays</title>
        <meta name="author" content="Aaron"> 
    </head>
    <body>
        <?php
            function longitudCadena($a) {
                return strlen($a);
            }

             $cadenas = array('blanco', 'verde', 'rojo', 'naranja', 'negro', 'gris');
             $cadenasLongitud = array_map("longitudCadena", $cadenas);
             $maxima = max($cadenasLongitud);
             $minima = min($cadenasLongitud);
             echo 'La maxima longitud es : ' . $maxima . " y la minima es: " . $minima;
            
       ?>
    </body>
</html>