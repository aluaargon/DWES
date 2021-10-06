<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Arrays</title>
        <meta name="author" content="Aaron"> 
    </head>
    <body>
        <?php

            function rand_Pass($upper = 1, $lower = 5, $numeric = 3, $other = 2) {
                $password = "";
                // $password .= chr(rand(65, 90)) . " ";
                // $password .= chr(rand(97, 122)) . " " . chr(rand(97, 122)) . " " . chr(rand(97, 122)) . " ". chr(rand(97, 122)) . " ". chr(rand(97, 122)) . " ";
                // $password .= rand(0, 9) . " " . rand(0, 9) . " " . rand(0, 9) . " ";
                // $password .=  chr(rand(123, 255)) . " " . chr(rand(123, 255));
                
                for ($i=0; $i < $upper; $i++) { 
                    $password .= chr(rand(65, 90)) . " ";
                }
                for ($i=0; $i < $lower; $i++) { 
                    $password .= chr(rand(97, 122)) . " ";
                }
                for ($i=0; $i < $numeric; $i++) { 
                    $password .= rand(0, 9) . " ";
                }
                for ($i=0; $i < $other; $i++) { 
                    $password .= chr(rand(33, 47)) . " ";
                }


                $passwordArray = explode(" ", $password);
                shuffle($passwordArray);
                return $passwordArray;
            }
        
            
            echo implode("", rand_Pass($upper = 3));
            
       ?>
    </body>
</html>