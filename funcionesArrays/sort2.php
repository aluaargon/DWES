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
        rsort($tempMesArray);
        $count = 0;
        $cadenaMaximas = "";
        // Esta variable es en teoria el grado anterior pero para que me cogiese si o si 
        // la primera temperatura del array lo e puesto a -2000 para que en teoria simpre se ejecute la primera vez
        $anterior = -2000;
        // Este for y el siguiente lo que hacen es comprobar que el numero actual no sea el mismo que el anterior
        // y si no es el mismo me lo guarda en la cadena
        for ($i=0; $count < 5; $i++) { 
            if ($tempMesArray[$i] != $anterior) {
                $cadenaMaximas .= " ". $count+1 . ". " . $tempMesArray[$i] . "<br>";    
                $count++;
                $anterior = $tempMesArray[$i];
            }
        }
        echo $cadenaMaximas;
        echo "<br> Minimas <br>";
        sort($tempMesArray);
        $cadenaMinimos = "";
        $anterior = -2000;
        $count = 0;
        for ($i=0; $count < 5; $i++) { 
            if ($tempMesArray[$i] != $anterior) {
                $cadenaMinimos .= " ". $count+1 . ". " . $tempMesArray[$i] . "<br>";    
                $count++;
                $anterior = $tempMesArray[$i];
            }
        }
        echo $cadenaMinimos;
        ?>
    </body>
</html>