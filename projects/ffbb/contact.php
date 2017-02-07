<?php $titre_page= "PPE1 - Contact" ?>
<?php include("include/header.php"); ?>
<?php include("include/menu.php"); ?>


<form action="soumissionFormulaireContact.php" method="post" id="Form-contact" size="10%">
	<legend><h1>Contacter l'administrateur</h1></legend>
		<fieldset class="FCMAIL0">

			<p><label for="name">Nom et prénom :&nbsp;&nbsp;</label><input type="text" id="name" name="name" placeholder="Saisissez votre nom et prénom"  required/></p><br />

			<p><label for="email">Email :&nbsp;&nbsp;</label><input type="email" id="email" name="email"placeholder="Saisissez votre email" required /></p><br />

			<p><label for="objet">Objet :&nbsp;&nbsp;</label><input type="text" id="objet" name="objet" placeholder="Saisissez votre objet" size="60" maxlength="50" required /></p><br />

			<p><label for="message">Message:</label></p>
			<p><textarea name="message" cols="60" rows="15"  id="message" placeholder="Ecrivez ici votre message" required ></textarea> </textarea></p><br />

		<p><br /><center><input type="reset" name="Reset" value="Réinitialiser">&nbsp;&nbsp;<input type="submit" name="envoyer" value="envoyer" id="envoyer" /></center></p><br />
	</fieldset>
</form>


<?php include("include/footer.php"); ?>



