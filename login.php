<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="./css/styles_login.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">

        <!-- Si utilisateur/trice est non identifié(e), on affiche le formulaire -->
        
        <?php if(!isset($loggedUser)): ?>    
            <form action="./" method="POST">

                <!-- si message d'erreur on l'affiche -->
                <?php if(isset($errorMessage)) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $errorMessage; ?>
                    </div>
                <?php endif; ?>
                <h1>Connexion</h1>
                    
                <div class="mb-3">
                    <label for="email" class="form-label"><b>Email</b></label>
                    <input type="text" class="form-control" placeholder="spyrrel@exemple.com" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label"><b>Mot de passe</b></label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required>
                </div>

                    <input type="submit" id='submit' value='SE CONNECTER' >
            </form>
            <!-- 
            Si utilisateur/trice bien connectée on affiche un message de succès
            -->
            <?php else: ?>
                <div class="alert alert-success" role="alert">
                    Bonjour <?php echo $loggedUser['email']; ?> et bienvenue sur le site !
                </div>
            <?php endif; ?>
        </div>
    </body>
</html>   