<?php

// Validation du formulaire
if (isset($_POST['pseudo']) &&  isset($_POST['password'])) {
    
    $servername = "localhost"; $db_name = "hartsum"; $db_user = "root";

    try {
        $dbco = new PDO("mysql:host=$servername;dbname=$db_name", $db_user);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $username = $_POST['pseudo'];
        $password = $_POST['password'];
        
        $sth = $dbco->prepare("SELECT id, username, pswd FROM users WHERE username=:username");
        $sth->bindParam(':username',$username);
        $sth->execute();

        $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
        
        if (isset($resultat[0])) {
            if (
                $username === $resultat[0]['username'] &&
                $password === $resultat[0]['pswd']
            ) {
                // Cookie
                $_SESSION['LOGGED_USER'] = $resultat[0]['username'];
                $_SESSION['USER_ID'] = $resultat[0]['id'];
            }
    
            else {
                $errorMessage = sprintf('Les informations fournies ne correspondent pas pour %s',
                $_POST['pseudo']);
            }

            
        }

        else {
            $errorMessage = sprintf('Les informations fournies ne correspondent pas pour %s',
            $_POST['pseudo']);
        }
    }
    
    catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
    
}
?>

<!--
   Si utilisateur/trice est non identifié(e), on affiche le formulaire
-->
<?php if(!isset($_SESSION['LOGGED_USER'])): ?>
<form action="./" method="post">
    <!-- si message d'erreur on l'affiche -->
    <?php if(isset($errorMessage)) : ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $errorMessage; ?>
        </div>
    <?php endif; ?>
    <div class="mb-3">
        <label for="pseudo" class="form-label">Pseudp</label>
        <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Spyrrel">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
<!-- 
    Si utilisateur/trice bien connectée on affiche un message de succès
-->
<?php else: ?>
    <div class="alert alert-success" role="alert">
        Bonjour <?php echo $_SESSION['LOGGED_USER']; ?> et bienvenue sur le site !
    </div>
<?php endif; ?>