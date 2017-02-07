<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Website - Validation</title>

</head>
<body class="accueil_background">
	<header>
		<nav>
		<!--	<div><a href="index.php"> Accueil</a></div>
			<div><a href="article.php"> ARTICLES</a></div>  -->
		</nav>
	</header>
	<main>
        <h1>Bienvenue sur votre site de e-commerce</h1>


          <!--
            <a href="article.php">Passer à la sélection d'articles</a>
            -->

            <form action='traitement_Index.php' method='post'><br/><br/>
              <fieldset>

                <legend>Informations de connexion</legend>


                <div>
                  <label for="courriel">Email :</label>
                  <input type="email" id="courriel" name="email" value="erwin@charles-dufant.fr" required="required"/>
                </div><br/>
                  <div>Votre mot de passe : <input type='password' name='pwd' required="required"></div><br/>


              </fieldset>

              <br/><input type='submit' value='Connexion'>
        </form>




	</main>
</body>
<footer>
	<p> © Développé par : Erwin CHARLES-DUFANT. </p>
</footer>
</html>
