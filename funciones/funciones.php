<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Funciones</title>
        <meta name="author" content="Aaron"> 
    </head>
    <body>
        <?php
            $tabla = "alumnos";
            $campos = array("nombre" => "Juan", "apellidos" => "Martínez");

            function insert($tabla, $campos) {
                $texto = "insert into $tabla ";
                foreach($campos as $campo => $value){
                    $txt1 .= "$campo, ";
                    $txt2 .= ":$campo, ";
                }
                
                return $texto . "(" . substr($txt1, 0, -2) . ")" . " value " . "(" . substr($txt2, 0, -2) . ")";
            }

            echo insert($tabla, $campos);
        ?>
    </body>
</html>