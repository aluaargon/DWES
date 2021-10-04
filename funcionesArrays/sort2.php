<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Arrays</title>
        <meta name="author" content="Aaron"> 
    </head>
    <body>
        <?php
        
        $termperaturasMes = "30, 25, 27, 42, 26, 31, 35, 25, 24, 36, 26, 25, 37, 27, 34, 30, 25, 27, 42, 26, 31, 35, 25, 24, 36, 26, 25, 37, 27, 34";
        $tempMesArray = explode( ", ", $termperaturasMes);
        echo "La media del array es: " . (array_sum($tempMesArray)/30) . "<br>";
        echo "Máximas: <br>";
        asort($tempMesArray, SORT_NUMERIC);
        for ($i=0; $i < 5; $i++) { 
            echo " ". $i+1 . ". " . $tempMesArray[$i] . "<br>";
        }
        echo "<br> Minimas <br>";
        arsort($tempMesArray, SORT_NUMERIC);
        for ($i=0; $i < 5; $i++) { 
            echo " ". $i+1 . ". " . $tempMesArray[$i] . "<br>";
        }
        ?>
    </body>
</html>