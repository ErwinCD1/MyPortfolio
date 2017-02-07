<?php $titre_page= "PPE1 - Formulaire Inscriptions" ?>
<?php include("include/header.php"); ?>
<?php include("include/menu.php"); ?>



<form method="POST" action="reception_infos_form.php" id="FormInscriptionClient">
	<fieldset class="FC1">
		<legend><h1>Formulaire Inscription Client</h1></legend>
			<fieldset class="FC2">
				<legend><h3>Informations Générales</h3><br /></legend>
					<p><label for="pseudo_client">* Votre Pseudo : &nbsp;&nbsp;</label><input type="text" name="pseudo_client" id="pseudo_client" value="ErwinCD1" required></p>
					<p><label for="nom_client">* Votre Nom :&nbsp;&nbsp;</label><input type="text" name="nom_client" id="nom_client" value="CHARLES-DUFANT" maxlength="50" required/></p> 
					<p><label for="prenom_client">* Votre Prénom : &nbsp;&nbsp;</label><input type="text" name="prenom_client" id="prenom_client" value="Erwin" maxlength="20" required></p>
					<p><label for="password_client">* Votre mot de passe :&nbsp;&nbsp;</label><input type="password" name="password_client" id="password_client" /></p>
					<p><label for="CONFIRMpassword_client">* Confirmation mot de passe :&nbsp;&nbsp;</label><input type="password" name="CONFIRMpassword_client" id="CONFIRMpassword_client" /></p>
			    	<p><label for="adresseMail_client">* Votre Adresse Mail : &nbsp;&nbsp;</label><input typre="email" name="adresseMail_client" id="adresseMail_client"  value="charleserwin1@outlook.fr" required></p>
					<p><label for="dateNaiss_client">* Votre Date de naissance : &nbsp;&nbsp;</label><input typre="date" name="dateNaiss_client" id="dateNaiss_client" value="11/04/1994" required></p>
			</fieldset>
			<fieldset class="FC3">
				<legend><h3>Coordonnées du client</h3></legend>
					<p><label for="tel_client">* Téléphone : &nbsp;&nbsp;</label><input type="tel" name="tel_client" id="tel_client" value="0644163743" required /></p>
					<p><label for="adressePost_client">* Adresse Postale :&nbsp;&nbsp; </label><input type="text" name="adressePost_client" id="adressePost_client" value="15 route de vénérieu" /></p>
					<p><label for="codePost_client">* Code Postale : &nbsp;&nbsp;</label><input type="numeric" name="codePost_client"  id="codePost_client" value="38460" /></p>
					<p><label for="paysOrigine_client">* Dans quel pays habitez-vous : &nbsp;&nbsp;</label><br /><select name="paysOrigine_client" id="paysOrigine_client">
					    <optgroup label="Europe"  ><option value="Espagne">Espagne</option><option value="France">France</option></optgroup>
						<optgroup label="Amérique"><option value="Canada" >Canada</option></optgroup>
						<optgroup label="Afrique" ><option value="Maroc"  >Maroc</option></optgroup></select></p>
			</fieldset>
			<fieldset class="FC4">
				<legend><h3>Analyse du formulaire</h3></legend> 
					<center><p><input type="reset" value="Réinitialiser">&nbsp;&nbsp;<input type="submit" name="envoyer" value="envoyer"/></p></center>
			</fieldset> 
		</fieldset>
</form>

<p style="color: white; position: relative;top:35%; left: 30%;">
<a href="index.php">Retour Accueil</a></p>


<?php include("include/footer.php"); ?>