<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Arrays</title>
        <meta name="author" content="Aaron"> 
    </head>
    <body>
        <?php
            $descripciones = array("Ivan" => "Lorem Ipsum", "Vicente" => "Lorem Ipsum dolor sit amet", "William" => "Lorem ", "Dani" => "Lorem Ipsum sit", "Joan" => "Lorem Ipsum dolor");
            function cmp($a, $b){
                if (strlen($a) == strlen($b)) {
                    return 0;  
                }
                return (strlen($a) < strlen($b)) ? -1 : 1;
            }
            uasort($descripciones, 'cmp');
            print_r($descripciones);
        ?>
    </body>
</html>