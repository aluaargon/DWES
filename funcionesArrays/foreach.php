<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Arrays</title>
        <meta name="author" content="Aaron"> 
    </head>
    <body>
        <ul>
        <?php
        $colors = array('blanco', 'verde', 'rojo');
            foreach($colors as $color){
                echo '<li>' . $color . '</li>';
            }
        ?>
        </ul>
        
    </body>
</html>