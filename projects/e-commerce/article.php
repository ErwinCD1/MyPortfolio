<?php session_start() ?>
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
        <h1>Bienvenue sur la liste d'achat</h1>

        <div style="position:absolute;top:1%;right:2%;color:blue;"> Bonjour <?php echo $_SESSION['email'] ?>, je me souviens de toi !</div>


        <form action="traitement_Article.php" method="post">
          <fieldset>
            <p><img src="FICHIERS/chemise.jpg" alt="Chemise" height="100" width="100">
                <input type="number" name="chemise" min="0" max="100">
                Prix Unitaire :<input type="text" name="prix_chemise" value="51"  />€</p>


            <p><img src="FICHIERS/pantalon.jpg" alt="Pantalon" height="100" width="100">
                <input type="number" name="pantalon" min="0" max="100">
                Prix Unitaire :<input type="text" name="prix_pantalon" value="39" />€</p>


            <p><img src="FICHIERS/veste.jpg" alt="Veste" height="100" width="100">
                <input type="number" name="veste" min="0" max="100">
                Prix Unitaire :<input type="text" name="prix_veste" value="55"  />€</p>



            <input type="submit" value="Acheter"/>
			</form>
	</main>
</body>
<footer>
	<p> © Développé par : Erwin CHARLES-DUFANT. </p>
</footer>
</html>
