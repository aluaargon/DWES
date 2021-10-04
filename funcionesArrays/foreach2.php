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
        $colors = array('blanco'=>'blanco.html', 'verde' => 'verde.html', 'rojo' => 'rojo.html');
            foreach($colors as $key => $valor){
                echo "<li><a href='" . $valor . "'> " . $key . '</a></li>';
            }
        ?>
        </ul>
        
    </body>
</html>