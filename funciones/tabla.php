<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title><?=$title?></title>
        <meta name="author" content="Aaron"> 
    </head>
    <body>
        <p>
<?php
    echo "<table border=1>";
    $contador=1;
    for ($i=1; $i <=10 ; $i++) { 
        echo "<tr>";
        for ($j=1; $j <=10 ; $j++) { 
            echo "<td>", $contador, "</td>";
            $contador++;
        }
        echo "</tr>";
    }
    echo "</table>"
?>
</p>
    </body>
</html>