<!DOCTYPE html>
<html lang="fr">
<?php include("head.php"); ?>
<?php include("menu.php"); ?>
<?php include("style2.php"); ?>
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />

<body>
        <div class="container">
                    <div id="wrapper">
                   
<form method="post" action="formulaire.php">
<fieldset class="f1">

<fieldset class="f2">
	<center><legend>Département</legend>	</center>
	<label>Nom : </label>
	<input type="text" name="nom_dept" id="nom_dept" pattern="[A-Za-z]+" placeholder="Informatique" required/>
	<br />
    <br />
	<label>Description : </label>
	<textarea style="width:40%" name="description_dept" id="description_dept" pattern="[A-Za-z]+" placeholder="Iut informatique de Belfort ..." required></textarea>
	<br />
    <br />
	<label>Id du site : </label>
	<select name="id_site" id="id_site"> 		
		<option value="1">Belfort Techn'Hom</option>
		<option value="2">Belfort Centre</option>
		<option value="3">Montbéliard</option>
	</select>
	<br />
    <br />
	<label>Type : </label>
	<select name="type_dept" id="type_dept"> 		
		<option value="secondaire">Secondaire</option>
		<option value="tertiaire">Tertiaire</option>
	</select>
</fieldset>

<fieldset class="f3">
<br />
<center><legend>Autres informations</legend></center>

	<label>Dates : </label>
	<input type="text" id="annee_dept" name="annee_dept" pattern="[0-9]{4}/[0-9]{4}" placeholder="2013/12/06" /></br>
	<br />
	<label>Nombre d'étudiant : </label><label>(1ère année) </label>
	<input type="text" name="nb_etu_1a_dept" value="" id="nb_etu_1a_dept" pattern="[0-9]+" required placeholder="1000" />
	<br />
    <br />
	<label>Nombre d'étudiant : </label><label>(2ème année) </label>
	<input type="text" name="nb_etu_2a_dept"  id="nb_etu_2a_dept"pattern="[0-9]+" placeholder="1000" required/>
	</fieldset>
<br /><br />
<fieldset class="f4">
<br />
<center><legend>Coordonnées de l'Etablissement</legend></center>
<br />
	<label>Longitude : </label>
	<input type="text" name="long_dept" value="" placeholder="47.6193757" id="long_dept"/>
	<br /><br />
	<label>Latitude : </label>
	<input type="text" name="lat_dept" value="" placeholder="47.6193757" id="lat_dept"/>
</fieldset>
<br/ ><br/ >
<fieldset class="f5">
	<input type="submit" name="valider" value="Valider"/>
<br/ >	
</fieldset>
</fieldset>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>

<br/ ><br/ >
<center>
<?php
$ma_connexion_mysql = mysqli_connect('localhost','admin','admin','iut');
if (!$ma_connexion_mysql)
{
	print('<br /> code Erreur de connexion : '.mysqli_connect_errno());
	print("<br /> Message d'erreur de connexion :".mysqli_connect_errno());
	exit();
}
else
{	
	if(isset($_POST["nom_dept"]) AND isset($_POST["description_dept"]) AND isset($_POST["type_dept"]) AND isset($_POST["nb_etu_1a_dept"])AND isset($_POST["nb_etu_2a_dept"])AND isset($_POST["long_dept"])AND isset($_POST["lat_dept"])AND isset($_POST["annee_dept"]) AND isset($_POST["id_site"]) && isset($_POST["valider"]))
{
    	$ma_commande_SQL ="INSERT INTO Departement VALUES (NULL,'".$_POST["nom_dept"]."','".$_POST["description_dept"]."','".$_POST["type_dept"]."','".$_POST["nb_etu_1a_dept"]."','".$_POST["nb_etu_2a_dept"]."','".$_POST["long_dept"]."', '".$_POST["lat_dept"]."','".$_POST["annee_dept"]."','".$_POST["id_site"]."');";
        $requete = mysqli_query($ma_connexion_mysql,$ma_commande_SQL);
        if (!($requete))
	{
		echo "<br/>Le formulaire n'a pas été soumis.";
		print('<br /> code Erreur : '.mysqli_errno($ma_connexion_mysql));
		print("<br /> Message d'erreur : ".mysqli_error($ma_connexion_mysql));
		print('<br /> Erreur - SQLSTATE : '.mysqli_sqlstate($ma_connexion_mysql));
		exit();
	}
	else
	{
		echo "<br/>Indication: Le formulaire a été soumis ";
		mysqli_query($ma_commande_SQL);
		print("à l'id N° ".mysqli_insert_id($ma_connexion_mysql));
		print(".");
		mysqli_close($ma_connexion_mysql);
	}
	}
}

?>
</form>
<?php include("script.php"); ?>
<?php include("footer.php"); ?>
<br/ ><br/ >
</center>
</body>
</html>

