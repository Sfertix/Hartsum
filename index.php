<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hartsum</title>
    <link href="./css/styles_index.css" rel="stylesheet">
    <script type="text/javascript" src="./js/sidenav.js"></script>
    
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">

    <!-- Navigation -->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="./">Accueil</a>
        <a href="#">Partie</a>
    </div>
    <span onclick="openNav()"><img class="navbutton" src="./images/menu.png" width=50px></span>

    <!-- Inclusion du formulaire de connexion -->
    <?php include_once('login_verif.php'); ?>
        <h2>Profil utilisateur</h2>

        <!-- Si l'utilisateur existe, on affiche les infos -->
        <?php if(isset($_SESSION['LOGGED_USER'])): ?>
            <p>Ces informations ne s'affichent qu'après la connexion au serveur.</p>
            <p> Vous êtes : <?php echo $_SESSION['LOGGED_USER'] ?> (#<?php echo $_SESSION['USER_ID'] ?>)</p>
        <?php endif; ?>
    </div>
</body>
</html>