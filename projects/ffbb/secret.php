<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Codes d'accès au serveur</title>
    </head>
    <body>
    
        <?php
        if ((isset($_POST['login_client']) AND $_POST['login_client'] ==  "stbe") AND (isset($_POST['password_client']) AND $_POST['password_client'] ==  "stbe")) 
        // Si le login et le mot de passe est bon
    {
    // On affiche les codes
    ?>
        <h1>Vous voilà connecté  :D   </h1>       
        <p>Cette page est réservée aux membres.</p>
        <a href="index.php">Retour Accueil</a>
        <?php
    }
    else // Sinon, on affiche un message d'erreur
    {
        echo '<p>Authentification incorrecte.</p>';
        echo "<p> Si vous voulez réessayer, <a href=\"connexion.php\">Cliquez ici";
    } 
    ?>




        
    </body>
</html>