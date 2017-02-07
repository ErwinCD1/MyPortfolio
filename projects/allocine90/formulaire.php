<?php
ini_set('display_errors', 1);
?>



<?php $title = "Formulaire"; ?>

<!DOCTYPE HTML PUBLIC>
<html lang="fr">



<html>
<?php include("include/head.php"); ?>
<body>
	<div id="body">

		<?php include("include/menu.php"); ?> 

		<fieldset class="form1">
				<form action="formulaire.php"  method= "post" >
				<center><legend><bold>ENREGISTREMENTS</bold></legend></center>
				<div class="f2">	
					<label>NOM CINEMA: </label>
					<select name="id_Cinema" id="id_Cinema" REQUIERED > 		
						<option value="1">Cinéma des  quais</option>
						<option value="2">Cinéma des Beaux Arts</option>
						<option value="3">Mégarama Lumina</option>
						<option value="4">Le Colisée</option>
						<option value="5">Majestic espace des lumières</option>
					</select>
					<br />
					<br />
					<label>FILM: </label>
					<input type="text" name="film" id="film" pattern="[A-Za-z]+" placeholder="Star Wars" required/>
					<br />
					<br />
					<label>SORTIE: </label>
					<select name="sortie" id="sortie" REQUIERED> 		
						<option value="1">2014</option>
						<option value="1">2013</option>
						<option value="1">2012</option>
						<option value="1">2011</option>
						<option value="1">2010</option>
					</select>
					<br />
					<br />
					<label>TYPE: </label>
					<select name="type" id="type" required> 		
						<option value="1">Action</option>
						<option value="1">Romantique</option>
						<option value="1">Horreur</option>
						<option value="1">Comédie</option>   
						<option value="1">Western</option>
						<option value="1">Dessin animé</option>
					</select>
					<br />
					<br />
					<label>VILLE: </label>
					<select name="ville" id="ville" REQUIERED> 		
						<option value="1">Belfort</option>
						<option value="2">Vesoul</option>
						<option value="3">Montbéliard</option>
						<option value="4">Besançon</option>
					</select>
					<br />
					<br />
					<label>ADRESSE: </label>
					<input type="text" name="adresse" id="adresse"  placeholder="2 Rue Ernest Duvillard" />
					<br />
					<br />
					<label>CODE POSTAL: </label>
					<input type="text" name="code_postal" id="code_postal"  placeholder="90000" />
					<br />
					<br />
					<label>TELEPHONE: </label>
					<input type="text" name="telephone" id="telephone"  placeholder="0384904040" />
					<br />
					<br />
					<label>TARIF: </label>
					<input type="text" name="tarif" id="tarif"  placeholder="9E50" />
					<br />
					<br />
					<label>LONGITUDE: </label>
					<input type="text" name="longitude" id="longitude"  placeholder="47.861667" />
					<br />
					<br />
					<label>LATITUDE: </label>
					<input type="text" name="latitude" id="latitude"  placeholder="6.861667" />
					<br />
					<br />
					<label>NOMBRE SALLE TOTAL CINEMA: </label>
					<input type="text" name="nbsalletotcinema" id="nbsalletotcinema"  placeholder="14" />
					<br />
					<br />
					<label>NOMBRE PLACE TOTAL CINEMA: </label>
					<input type="text" name="nbsplacetotcinema" id="nbsplacetotcinema"  placeholder="14" />
					<br />
					<br />
					<label>REFERENCE PHOTO CINEMA: </label>
					<input type="text" name="refphotocinema" id="refphotocinema" placeholder="1" />
					<br />
					<br />



					
				</div>  


				<br />
				<br />
				<center>ACTION SUR LA TABLE : 
					&nbsp;&nbsp;
   				<input type="submit" name="valider" value="Valider" />

					




					</center>
<?php

$serveur="localhost";
$user="root";
$pw="tvolqogk";
$base="echarle3";

$ma_connexion_mysql = mysqli_connect($serveur , $user , $pw , $base );
if (!$ma_connexion_mysql){
	print('<br /> code Erreur de connexion : '.mysqli_connect_errno());
	print("<br /> Message d'erreur de connexion :".mysqli_connect_errno());
	exit();
}
	else{
		if (isset($_POST["valider"])){


		$ma_commande_SQL ="INSERT INTO Cinema VALUES (NULL,".$_POST["id_Cinema"].",
		".$_POST["film"].",".$_POST["type"].", ".$_POST["ville"].",".$_POST["adresse"].",".$_POST["code_postal"].",".$_POST["telephone"].",".$_POST["tarif"].",
		".$_POST["latitude"].",".$_POST["longitude"].",".$_POST["nbsalletotcinema"].",".$_POST["nbsplacetotcinema"].",  ".$_POST["refphotocinema"].");";

$requete = mysqli_query($ma_connexion_mysql,$ma_commande_SQL);
if (!($requete)){
	echo "<br/>Le formulaire n'a pas été soumis.";
	print('<br /> code Erreur : '.mysqli_errno($ma_connexion_mysql));
	print("<br /> Message d'erreur : ".mysqli_error($ma_connexion_mysql));
	print('<br /> Erreur - SQLSTATE : '.mysqli_sqlstate($ma_connexion_mysql));
	mysqli_query($ma_connexion_mysql , $ma_commande_SQL);
	exit();
	// 	echo "<br/>Indication: Le formulaire a été soumis ";
	// mysqli_query($ma_connexion_mysql , $ma_commande_SQL);
	// print("à l'id N° ".mysqli_insert_id($ma_connexion_mysql));
	// print(".");
	// mysqli_close($ma_connexion_mysql);
}
else{
	echo "<br/>Indication: Le formulaire a été soumis ";
	mysqli_query($ma_connexion_mysql , $ma_commande_SQL);
	print("à l'id N° ".mysqli_insert_id($ma_connexion_mysql));
	print(".");
	mysqli_close($ma_connexion_mysql);
}}}

// else
// {
//     print ' 
//     <form action="formulaire.php" method="post">
//     <fieldset> 
// <legend><h1> Edition </h1></legend> 
// Nom : <input type="text" name="nom_dept" value="'.$cinema[1].'"   /> </br>
// Descrition : <input type="text" name="description_dept" value="'.$cinema[2].'"  /> </br>
// <select name="type_dept"><option value="secondaire"  ';
// if ($cinema[3]=='secondaire') print('selected');
// print '>Secondaire</option><option value="tertiaire" ';
// if ($cinema[4]=='tertiaire') print('selected');
// print '>tertiaire</option>
// <select> </br>
// Nombre d etudiant en 1ère année : <input type="text" name="nbre_etu_1A_dept" value="'.$cinema[5].'"   /></br>
// Nombre d etudiant en 2ème année : <input type="text" name="nbre_etu_2A_dept" value="'.$cinema[6].'"  /> </br>
// Longitude : <input type="text" name="long_dept" value="'.$cinema[7].'"  /></br>
// Latitude : <input type="text" name="lat_dept" value="'.$cinema[8].'"  /></br>
// Numéro du site :  <input type="text" name="id_site" value="'.$cinema[9].'"/> </br>
// Année universitaire : <input type="text" name="annee_universitaire" value="'.$cinema[10].'"  /></br>
//     <input type="hidden" name="id_Cinem" value="'.$id_Cinema.'" />
//     <input type="submit" name="form1_Valider" value="Validation" />
    
// </fieldset>
// </form>';
// }

?>










</center> 
<br /><br /><br /><br />

</form>
</fieldset>
</div>
</body>
</html>