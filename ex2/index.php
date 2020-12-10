<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 6 - ex2</title>
</head>

<body>

    <h1>Partie 6 - ex2</h1>

    <p>
    Faire une page index.php. Tester sur cette page que le paramètre age existe 
    et si c'est le cas l'afficher sinon le signaler : 
    index.php?lastname=Nemare&firstname=Jean
    </p>

    <div><a href="index.php?lastname=Neymar&firstname=Jean&age=37">reload</a></div>

    <?php
        

        if (isset($_GET['age']) )   // si age existe
        {
            echo 'Age ' . $_GET['age'];
        }
        else   // sinon l'indiquer
        {
            echo 'age n\'existe pas !!!';
        }

    ?>

</body>

</html>