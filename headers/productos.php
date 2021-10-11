<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Headers php</title>
        <meta name="author" content="Aaron"> 
    </head>
    <body>
        <?php
            $productos = array('1' =>  'Refresco', '2' =>  'Pan', '3' =>  'Jamon', '4' =>  'Papas');
            $idProducto = $_GET["id"]?? "";
            if ($idProducto != "" && array_key_exists($idProducto, $productos) != false) {
                echo $productos[$idProducto];
            } else {
                http_response_code(404);
            }
       ?>
    </body>
</html>