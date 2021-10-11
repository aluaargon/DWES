
        <?php
            
            header('Content_Type: application/csv');
            header('Content-Disposition: attachment; filename="productos.csv"');
            $productos = array('1' =>  'Refresco', '2' =>  'Pan', '3' =>  'Jamon', '4' =>  'Papas');
            foreach($productos as $key => $value) {
                echo $key . ";" . $value . "\n";
            }
            

            

       ?>
