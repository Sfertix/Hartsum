<!DOCTYPE html>
<html>
    <head>
        <title>Page en traitement</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>Dans le formulaire précédent, vous avez fourni les
        informations suivantes :</p>
        
        <?php
            echo 'Question 1 : '.$_POST["quest1"].'<br>';
            echo 'Bonne réponse : '.$_POST["reponse"].'<br>';
            echo 'Faux 1 : '.$_POST["mauvaise1"].'<br>';
            echo 'Faux 2 : ' .$_POST["mauvaise2"].'<br>';
            echo 'Faux 3: ' .$_POST["mauvaise3"].'<br>';
        ?>
    </body>
</html>