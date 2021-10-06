<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Arrays</title>
        <meta name="author" content="Aaron"> 
    </head>
    <body>
        <?php
            function partlist($conjunto) {
                $conjuntoDeConjuntos = array();
                for ($i=0; $i < count($conjunto)-1; $i++) { 
                    $parte1 = implode(" ", array_slice($conjunto, 0, $i+1));
                    $parte2 = implode(" ", array_slice($conjunto, $i+1));
                    
                    array_push($conjuntoDeConjuntos, array($parte1, $parte2));
                }
                
                
                return $conjuntoDeConjuntos;
            }
            $conjunto = array("Seguro", "que", "apruebo", "esta", "asignatura");

            print_r(partlist($conjunto));
       ?>
    </body>
</html>