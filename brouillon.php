<!DOCTYPE html>
<html>
    <head>
        <title>Page en traitement</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./styles.css">
    </head>

    <body>
        <!-- Inclusion du formulaire de connexion -->
        <?php include_once('./login/login.php'); ?>
            <h1>Site de Recettes !</h1>

            <!-- Si l'utilisateur existe, on affiche les recettes -->
            <?php if(isset($loggedUser)): ?>
                <?php foreach(get_recipes($recipes, $limit) as $recipe) : ?>
                    <article>
                        <h3><?php echo $recipe['title']; ?></h3>
                        <div><?php echo $recipe['recipe']; ?></div>
                        <i><?php echo display_author($recipe['author'], $users); ?></i>
                    </article>
                <?php endforeach ?>
            <?php endif; ?>
        </div>

        <div class="question_blocks">
            <form action="add_questions.php" method="post">
            
                <div class="c100">
                    <label for="quest1">Question n°1 :</label>
                    <input type="text" id="quest1" name="quest1">
                </div>
            
                <div class="c100">
                    <label for="reponse">Saisissez la bonne réponse :</label>
                    <input type="text" id="reponse" name="reponse">
                </div>
            
                <div class="c100">
                    <label for="bad1">Saisissez 3 mauvaises réponse pouvant induire en erreur les candidats :</label>
                    <input type="text" id="mauvaise1" name="mauvaise1">
                    <input type="text" id="mauvaise2" name="mauvaise2">
                    <input type="text" id="mauvaise3" name="mauvaise3">
                </div>
            
                <div class="c100" id="submit">
                    <input type="submit" value="Envoyer">
                </div>
            </form>
        </div>

    </body>
</html>