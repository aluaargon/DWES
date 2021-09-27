<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>update</title>
        <meta name="author" content="Aaron"> 
    </head>
    <body>
        <?php
            $tabla = "alumnos";
            $campos = array("id" => 1, "nombre" => "Juan", "apellidos" => "Martínez");
            function insert($tabla, $campos) {
                $texto = "UPDATE $tabla SET";
                $firstKey = array_shift(array_keys($campos));
                $i = 0;
                foreach($campos as $campo => $value){
                    if ($i != 0) {
                        $texto .= " $campo:=$campo ";
                    }
                    
                    $i++;
                }
                
                $texto .= "WHERE ";
                $texto .= $firstKey . ":=" . $firstKey;
                return $texto; 
    
            }

            echo insert($tabla, $campos);


            
        ?>
    </body>
</html>