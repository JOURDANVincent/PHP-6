<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 6 - ex4</title>
</head>

<body>

    <h1>Partie 6 - ex4</h1>

    <p>
    Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher : 
    index.php?language=PHP&server=LAMP
    </p>

    <div><a href="index.php?language=PHP&server=LAMP">Go To New index.php</a></div>

    <?php

        if (isset($_GET['language']) AND isset($_GET['server']) )   // si age existe
        {
            echo '<br> language : ' .$_GET['language']. ' and server : ' .$_GET['server'];
        }
        else   // sinon l'indiquer
        {
            echo 'N\'existe pas !!!';
        }

    ?>

</body>

</html>