<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stampa Lista</title>
</head>
<body>
    <?php


    $cont = 0;
  

     function stampaLista($num, $tipo){
        for ($i = 0; $i<=$num; $i++){
            if ($tipo == 'o' || $tipo == 'O'){
                if ($cont==0){
                    echo "<ol>";
                    $cont++;
                }
                
              if ($i%2==0 || $i%5==0){
                echo "<li> numero " . $i . "</li>";
             }
               
        }else{
            if ($cont==0){
                echo "<ul>";
                $cont++;
            }
              if ($i%2==0 || $i%5==0){
                echo "<li> numero " . $i . "</li>";
             }
               echo "</ul>";
        }
     }

     if ($tipo == 'o' || $tipo == 'O'){
        echo "</ol>";
     }else{
        echo "</ul>";
     }
     

     }

     stampaLista(150, 'u');




    ?>
    
</body>
</html>