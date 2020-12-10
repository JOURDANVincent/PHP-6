<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 6 - ex1</title>
</head>

<body>

    <h1>Partie 6 - ex1</h1>

    <p>
        Faire une page index.php. 
        Tester sur cette page que tous les paramètres de cette URL existent et les afficher : 
        index.php?lastname=Neymar&firstname=Jean 
    </p>

    <div><a href="index.php?lastname=Neymar&firstname=Jean"></a></div>

    <?php
        

        if (isset($_GET['lastname']) AND isset($_GET['firstname']))   // on a le nom et le prénom
        {
            echo 'Bonjour ' . $_GET['firstname'] . ' ' . $_GET['lastname'] . '!';
        }
        else   // Il manque des paramètres, on avertit le visiteur
        {
            echo 'Il faut renseigner un nom et un prénom !';
        }

    ?>

</body>

</html>