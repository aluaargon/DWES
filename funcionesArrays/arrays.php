<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Arrays php</title>
        <meta name="author" content="Aaron"> 
    </head>
    <body>
        <?php
            $nombres = ['Bea', 'Ivan', 'Aaron', 'Cristina', 'Victor', 'Rodrigo'];
            echo count($nombres) . '<br>';
            $nombresSeparadosEspacio = implode(" ", $nombres);
            echo $nombresSeparadosEspacio  . '<br>';
            asort($nombres);
            $cadenaNombres = implode("<br>", $nombres);
            // foreach($nombres as $nombre){
            //     echo $nombre . '<br>';
            // }
            echo $cadenaNombres . '<br>';
            $reversed = array_reverse($nombres);
            $cadenaNombresReversed = implode("<br>", $reversed);
            echo $cadenaNombresReversed;
            echo "Aaron esta en la clave: " . array_search('Aaron', $nombres) . '<br>';
            
            $alumnos = array(
                array("id" => "1", "nombre" => "Saul", "edad" => 20),
                array("id" => "2", "nombre" => "Roberto", "edad" => 25),
                array("id" => "3", "nombre" => "Sara", "edad" => 21),
                array("id" => "4", "nombre" => "Rocio", "edad" => 18)    
            );
            print_r($alumnos);
            echo '<br>';
            print_r(array_column($alumnos, 'nombre'));
            echo '<br>';

            $numeros = array(10, 10, 10, 2, 6, 4, 10, 6 ,8, 2);

            echo 'La suma del array de numeros es: ' . array_sum($numeros);
       ?>
       <table >
           <tr>
               <th>id</th>
               <th>nombre</th>
               <th>edad</th>
           </tr>
           <?php 
            foreach($alumnos as $alumno => $valor){
                
                $id = " <td>" . $valor["id"] ."</td>";
                $nombre = " <td>" . $valor["nombre"] ."</td>";
                $edad = " <td>" . $valor["edad"] ."</td>";
                echo "<tr>" . $id . $nombre . $edad ."</tr>";
            }
           ?>
       </table>
    </body>
</html>