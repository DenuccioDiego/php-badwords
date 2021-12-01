<?php 

     $str = 'sopra la panca la capra campa sopra la panca la capra campa sopra la panca la capra campa sopra la panca la capra campa sopra la panca la capra campa';
     $la = 'la';
     $parola_da_filtrare = $_GET['la']; 
?>





<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>

     <div>
          <?php 
               echo $str. '<br>';
               //$nome = $argv[1];
               
               $lunghezza_str = strlen($str);
               echo "Lunghezza_str: {$lunghezza_str}". '<br>';
               
               

               $filter_word = str_replace($parola_da_filtrare, '*', $str);  
               echo $filter_word. '<br>';

               $lunghezza_str = strlen($filter_word);
               echo "Lunghezza_str_filtrata: {$lunghezza_str}";
         ?>
     </div>
     

     
</body>
</html>