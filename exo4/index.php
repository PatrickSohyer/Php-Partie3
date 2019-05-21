<!DOCTYPE html>
<html lang="fr" dir="ltr">
    
    <head>
        <meta charset="utf-8">
        <title>Exercice 4</title>
    </head>
    
    <body>
        
<?php

$number = 1;
while ($number <= 10) {
$number = $number + $number / 2;

 ?>
        
        <p>Ma variable est égale à <?= $number ?></p>
 <?php
}
 ?>
        
    </body>
    
</html>
