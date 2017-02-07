<?php session_start();

$panier = $_SESSION['panier'];

#var_dump($panier);die;

/* foreach($liste as $k => $v) {
   $avis[$k] = $v['avis_dvd'];
}
*/
?>

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
        <h1>Bienvenue sur votre panier</h1>
				<div style="position:absolute;top:1%;right:2%;color:blue;"> Bonjour <?php echo $_SESSION['email'] ?>, je te suivrai jusqu'à la mort !</div>
        <form action="traitement_Panier.php" method="post">
          <fieldset>

            <p>Vous Avez sélectionner:</p>
            <?php
            foreach ($panier as $key => $value)
            {
                echo $value['qte']." ".$value['article']." soit un total de ".$value['qte']*$value['prix']." € <br/> ";

            }
            ?>
            <p>Pour un total final de : <?php

            $result = $panier[0]['qte']*$panier[0]['prix'];
            $result += $panier[1]['qte']*$panier[1]['prix'];
            $result += $panier[2]['qte']*$panier[2]['prix'];

            echo $result." € ";
            $_SESSION['prixTotal'] = $result;
            //var_dump($_SESSION['prixTotal']);
            ?>
            </p>
            <p></p>

            <input type="submit" value="Passer au paiement"/>
			</form>
	</main>
</body>
<footer>
	<p> © Développé par : Erwin CHARLES-DUFANT. </p>
</footer>
</html>
