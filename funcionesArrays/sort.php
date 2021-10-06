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
        echo 'Ascendente por el nombre: <br>';
        print_r($edades);
        echo '<br>';
        // Ascendente por la edad
        echo 'Ascendente por la edad: <br>';
        asort($edades);
        print_r($edades);
        echo '<br>';
        // Descendente por el nombre
        krsort($edades);
        echo 'Descendente por el nombre: <br>';
        print_r($edades);
        echo '<br>';
        // Descendente por la edad
        arsort($edades);
        echo 'Descendente por la edad: <br>';
        print_r($edades);
        echo '<br>';
            
        ?>
    </body>
</html>