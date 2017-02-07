<?php session_start();

$result = $_SESSION['prixTotal'];

#var_dump($panier);die;


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

		<div style="position:absolute;top:1%;right:2%;color:blue;"> <?php echo $_SESSION['email'] ?>, Ton heure est proche !</div>
        <h1>Bienvenue sur votre panier</h1>
        <form action="traitement_paiement.php" method="post">
          <fieldset>

            <p>Nous allons désormais procédé au paiement : </p>
            <p>Veuillez sasir l'ensemble des information pour finaliser la commande </p>

            <div>Cette carte appartient à : <input type='text' name='nomPrenom' placeholder="Nom & Prenom" required="required"></div><br/>
            <div>Votre Numéro de cb est : <input type='text' name='cb_txt' required="required"></div><br/>
						<div>Date d'expiration : <input type='date' name='cb_date_txt' required="required"></div><br/>
            <div>Votre code secret est : <input type='password' name='cb_pass_txt' required="required" placeholder="3 chiffres au dos de la carte"></div><br/>

            <input type="submit" value="Valider paiement"/>
			</form>
	</main>
</body>
<footer>
	<p> © Développé par : Erwin CHARLES-DUFANT. </p>
</footer>
</html>
<?php $_SESSION['prixTotal'] = $result   ?>
