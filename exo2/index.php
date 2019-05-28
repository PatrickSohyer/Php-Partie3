<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 2</title>
    </head>
    <body>

        <?php
        $number1 = 0; // je créer une variable que j'initialise à 0
        $number2 = rand(1, 100); // je créer une variable qui prendra comme valeur un chiffre de 1 à 100
        while ($number1 <= 20) { // tan que le nombre 1 est inférieur ou égal à 20
            $result = $number1 * $number2; // je créer le résultat
            $number1++; // et j'incrémente le chiffre 1
            ?>

            <p> Le résultat est de  <b><?= $result ?></b></p> <?php } ?>

        <p><a href="http://phpexercice/partie3/exo1/">Partie 3 exerice 1</a></p>
        <p><a href="http://phpexercice/partie3/exo2/">Partie 3 exerice 2</a></p>
        <p><a href="http://phpexercice/partie3/exo3/">Partie 3 exerice 3</a></p>
        <p><a href="http://phpexercice/partie3/exo4/">Partie 3 exerice 4</a></p>
        <p><a href="http://phpexercice/partie3/exo5/">Partie 3 exerice 5</a></p>
        <p><a href="http://phpexercice/partie3/exo6/">Partie 3 exerice 6</a></p>
        <p><a href="http://phpexercice/partie3/exo7/">Partie 3 exerice 7</a></p>
        <p><a href="http://phpexercice/partie3/exo8/">Partie 3 exerice 8</a></p>

    </body>
</html>
