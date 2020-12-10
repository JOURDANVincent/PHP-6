<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 6 - ex3</title>
</head>

<body>

    <h1>Partie 6 - ex3</h1>

    <p>
    Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher : 
    index.php?startDate=2/05/2016&endDate=27/11/2016
    </p>

    <div><a href="index.php?startDate=2/05/2016&endDate=27/11/2016">reload</a></div>

    <?php

        if (isset($_GET['startDate']) AND isset($_GET['endDate']) )   // si age existe
        {
            echo 'startDate : ' .$_GET['startDate']. ' and endDate : ' .$_GET['endDate'];
        }
        else   // sinon l'indiquer
        {
            echo 'N\'existe pas !!!';
        }

    ?>

</body>

</html>