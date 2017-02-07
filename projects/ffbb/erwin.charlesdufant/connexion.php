<?php $titre_page= "PPE1 - Connexion" ?>
<?php include("include/header.php"); ?>
<?php include("include/menu.php"); ?>


<body>


<form method="POST" action="secret.php" id="connexionCompte">
	<fieldset class="CONNEXION">
	<p>Veuillez entrer le mot de passe pour accéder à votre espace personel : </p><br />
		<p>	
			<input type="text" name="login_client" />
			<input type="password" name="password_client" />
	        <input type="submit" value="Valider" />
        </p>
	
</form>
<br /> <p>Cette page est réservée. Si vous ne connaissez pas vos identifiants, inutile d'insister vous ne trouverez jamais le mot de passe ! ;-)</p>

<br /><br />Si vous n'avez pas de compte, il est grand temps de vous en faire un, <a href="formulaire_inscription.php">cliquer ici</a>.</span>




<?php include("include/footer.php"); ?>