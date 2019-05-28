<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 1</title>
    </head>
    <body>

        <?php
        for ($number = 0; $number < 11; $number++) { // je déclare ma variable à 0, et je l'incrémente de 1 tan que ma variable est inférieur à 11
            ?>

            <p> ceci est la ligne numéro <?= $number; ?></p>
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
