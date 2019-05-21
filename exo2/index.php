<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 2</title>
    </head>
    <body>
        
<?php

  $number1 = 0;
  $number2 = rand( 1, 100 );
  while ($number1 <= 20) {
    $result = $number1 * $number2;
    $number1++;

 ?>
        
        <p> Le résultat est de  <b><?= $result ?></b></p> <?php } ?>
        
    </body>
</html>
