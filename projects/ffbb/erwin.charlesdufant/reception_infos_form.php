<html>
<head>
	<title> PPE1 - Réceptions informations formulaires </title>
	<meta charset="utf-8" />
</head>

<body>

	<p>
		Bienvenue <strong><?php echo htmlentities($_POST['prenom_client']); ?></strong>, merci d'avoir crée un compte sur notre site. Nous sommes en train d'analyser vos informations. Nous vous souhaitons une bonne navigation.
	</p>

	<p>
		Votre pseudo est : <?php echo htmlentities($_POST['pseudo_client']); ?>.
	</p>
	<p>
		Votre nom de famille est : <?php echo htmlentities($_POST['nom_client']); ?>.
	</p>
	<p>
		Votre mot de passe est : <?php echo htmlentities($_POST['password_client']); ?>.
	</p>
	<p>
		L'adresse e-mail que vous avez utilisez est : <?php echo htmlentities($_POST['adresseMail_client']); ?>.
	</p>
	<p>
		Votre date de naissance est :  <?php echo htmlentities($_POST['dateNaiss_client']); ?>.
	</p>
	<p>
		Votre numéro de téléphone est :  <?php echo htmlentities($_POST['tel_client']); ?>.
	</p>
	<p>
		Votre adresse postale est :  <?php echo htmlentities($_POST['adressePost_client']); ?>,  <?php echo htmlentities($_POST['codePost_client']); ?>.
	</p>


</body>
</html>
