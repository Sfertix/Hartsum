<?php
    $serveur = "localhost";
    $dbname = "dbtest";
    $user = "root";

    $nom = $_POST["prenom"];

    try {
        // Connection à la DB
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Insertion des données
        $sth = $dbco->prepare("INSERT INTO first_one(noms) VALUES(:nom)");
        $sth->bindParam(':nom',$nom);
        $sth->execute();

        // Renvoie de l'utilisateur vers la page de remerciements
        header('Location:form-merci.html');
    }

    catch(PDOException $e) {
        echo 'Impossible de traiter les données. Erreur :', $e->getMessage();
    }
?>