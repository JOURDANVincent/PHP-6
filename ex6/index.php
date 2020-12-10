<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 6 - ex6</title>
</head>

<body>

    <h1>Partie 6 - ex6</h1>

    <p>
    Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher : index.php?week=12
    </p>

    <div><a href="index.php?week=12">Go To New index.php</a></div>

    <?php

        if (isset($_GET['language']) OR isset($_GET['week']) )   // si age existe
        {
            echo '<br> language : ' .$_GET['language']. ' and week : ' .$_GET['week'];
        }
        else   // sinon l'indiquer
        {
            echo '<br> N\'existe pas !!!';
        }

    ?>

</body>

</html>