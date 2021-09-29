<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Arrays</title>
        <meta name="author" content="Aaron"> 
    </head>
    <body>
        <?php
            $nombres = ['Bea', 'Ivan', 'Aaron', 'Cristina', 'Victor', 'Rodrigo'];
            echo count($nombres) . '<br>';
            $nombresSeparadosEspacio = implode(" ", $nombres);
            echo $nombresSeparadosEspacio  . '<br>';
            asort($nombres);
            foreach($nombres as $nombre){
                echo $nombre . '<br>';
            }
            $reversed = array_reverse($nombres);
            foreach($reversed as $reverse){
                echo $reverse . '<br>';
            }
            echo "Aaron esta en la clave: " . array_search('Aaron', $nombres) . '<br>';
            
            $alumnos = array(
                array("id" => "1", "nombre" => "Saul", "edad" => 20),
                array("id" => "2", "nombre" => "Roberto", "edad" => 25),
                array("id" => "3", "nombre" => "Sara", "edad" => 21),
                array("id" => "4", "nombre" => "Rocio", "edad" => 18)    
            );
            print_r($alumnos) . '<br>';
            
            
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