<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Arrays</title>
        <meta name="author" content="Aaron"> 
    </head>
    <body>
        <?php
        $edades=array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40");
        // Ascendente por el nombre
        ksort($edades);
        echo 'Ascendente por el nombre: ';
        foreach($edades as $key => $value) {
            echo "{$key} => {$value} ";
        }
        echo '<br>';
        // Ascendente por la edad
        asort($edades);
        echo 'Ascendente por la edad: ';
        foreach($edades as $key => $value) {
            echo "{$key} => {$value} ";
        }
        echo '<br>';
        // Descendente por el nombre
        krsort($edades);
        echo 'Descendente por el nombre: ';
        foreach($edades as $key => $value) {
            echo "{$key} => {$value} ";
        }
        echo '<br>';
        // Descendente por la edad
        arsort($Edades);
        echo 'Descendente por la edad: ';
        foreach($edades as $key => $value) {
            echo "{$key} => {$value} ";
        }
            
        ?>
    </body>
</html>