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
