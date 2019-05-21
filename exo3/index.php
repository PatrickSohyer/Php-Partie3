<!DOCTYPE html>
<html lang="fr" dir="ltr">
    
    <head>
        <meta charset="utf-8">
        <title>Exercice 3</title>
    </head>
    
    <body>
        
<?php

$number1 = 100;
$number2 = rand( 1, 100 );
while ($number1 >= 10) {
  $result = $number1 * $number2;
  $number1--;

 ?>
        
        <p>Le résultat de la multiplication est <b><?= $result ?></b></p>
<?php
  }
?>
        
    </body>
    
</html>
