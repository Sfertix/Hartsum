<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hartsum</title>
    <link href="./css/styles_index.css" rel="stylesheet">
    <script type="text/javascript" src="./js/sidenav.js"></script>
    <?php
        include_once('variables.php');
    ?>
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">

    <!-- Navigation -->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
    </div>
    <span onclick="openNav()">Ouvrir</span>
    
    <!-- Inclusion du formulaire de connexion -->
    <?php include_once('login_verif.php'); ?>
        <h2>Profil utilisateur</h2>

        <!-- Si l'utilisateur existe, on affiche les recettes -->
        <?php if(isset($loggedUser)): ?>
            
        <?php endif; ?>
    </div>

    <?php include_once('footer.php'); ?>
</body>
</html>