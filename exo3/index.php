<!DOCTYPE html>
<html lang="fr" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title>Exercice 3</title>
    </head>

    <body>

        <?php
        $number1 = 100;
        $number2 = rand(1, 100);
        while ($number1 >= 10) {
            $result = $number1 * $number2;
            $number1--;
            ?>

            <p>Le résultat de la multiplication est <b><?= $result ?></b></p>
    <?php
}
?>

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
