<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>insertReferencia</title>
        <meta name="author" content="Aaron"> 
    </head>
    <body>
        <?php
            $tabla = "alumnos";
            $campos = array("nombre" => "Juan", "apellidos" => "Martínez");
            $texto = "insert into $tabla (campos) values (valores)";

            function insertReferencia(&$texto, $tabla, $campos) {
                
                foreach($campos as $campo => $value){
                    $txt1 .= "$campo, ";
                    $txt2 .= ":$campo, ";
                }
                $texto = str_replace("campos", substr($txt1, 0, -2), $texto);
                $texto = str_replace("valores", substr($txt2, 0, -2), $texto);
                
            }
            insertReferencia($texto, $tabla, $campos);
            echo $texto;  
        ?>
    </body>
</html>