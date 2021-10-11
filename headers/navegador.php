<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Headers php</title>
        <meta name="author" content="Aaron"> 
    </head>
    <body>
        <?php
                if (stripos($_SERVER["HTTP_USER_AGENT"], 'firefox') !== false) {
                    echo '<h1>bienvenido a mi web</h1>';
                } else {
                    echo 'instala firefox para visualizar esta páigna';
                }
       ?>
    </body>
</html>