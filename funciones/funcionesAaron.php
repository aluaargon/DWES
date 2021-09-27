    <!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="utf-8">
            <title>Funciones</title>
            <meta name="author" content="Aaron"> 
        </head>
        <body>
            <?php
                // ----------------Ejercicio1----------------------
                echo "-----------------Ejercicio1------------------ </br>";
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

                // ----------------Ejercicio2----------------------
                echo "</br> -----------------Ejercicio3------------------ </br>";
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

                // ----------------Ejercicio3----------------------
                echo "</br> -----------------Ejercicio3------------------ </br>";

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

                // ----------------Ejercicio4----------------------
                echo "</br> -----------------Ejercicio4------------------ </br>";

                function resultado(callable $operacion, $signo, $num1, $num2) {
                    echo $num1 . " " . $signo . " " . $num2 . " = " . $operacion($num1, $num2);
                }
                $suma = function($num1, $num2) {
                    return $num1 + $num2;
                }
                $resta = function($num1, $num2) {
                    return $num1 + $num2;
                }
                $division = function($num1, $num2) {
                    return $num1 + $num2;
                }
                $multiplicacion = function($num1, $num2) {
                    return $num1 + $num2;
                }    

                resultado($suma, "+", 2, 2);
            ?>
        </body>
    </html>
