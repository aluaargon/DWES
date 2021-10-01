<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Cadenas</title>
        <meta name="author" content="Aaron"> 
    </head>
    <body>
        <?php
            // Ejercicio 1
            $nombre = $_GET["nombre"]?? "Aaron";
            $nombreTrim = trim($nombre, '/');
            echo "Nombre con el trim: " . $nombreTrim;
           
            // El siguiente echo lo utilizo solo como separador de las respuestas
            // No es parte del ejercicio
            echo '<br>';
           
            // Ejercicio 2 
            echo 'La longitud de la cadena nombre es: ' . strlen($nombre);
            echo '<br>';
           
            // Ejercicio 3
            echo 'Esta es la cadena nombre pasada a mayuscualas: ' . strtoupper($nombre);
            echo '<br>';
           
            // Ejercico 4
            echo 'Esta es la cadena nombre pasada a minusculas: ' . strtolower($nombre);
            echo '<br>';

            // Ejercicio 5 
            $prefijo = $_GET["prefijo"]?? "";
            echo ($prefijo != "")? ((strpos($nombre, $prefijo) === 0)? "El nombre Sí empieza por el prefijo " . $prefijo : "El nombre No empieza por el prefijo " . $prefijo) : 'No hay prefijo';
            echo '<br>';

            // Ejercicio 6
            echo 'La a aparece ' . substr_count(strtolower($nombre), 'a') . ' veces en el nombre';
            echo '<br>';

            // Ejercicio 7
            echo (stripos($nombre, 'a') != false)? 'La posición de la a en la cadena nombre es la: ' . (stripos($nombre, 'a') + 1) : 'La cadena no contien la letra a';
            echo '<br>';

            // Ejercicio 8
            echo 'Si sustituimos las o por 0 en el nombre quedaría así: ' . str_ireplace('o', '0', $nombre);

           ?>
    </body>
</html>