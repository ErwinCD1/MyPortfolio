<!DOCTYPE html>
<html>

<!-- Mise en page de l'en tête, qui renvoie au design du site -->
<?php include("module/header.php"); ?>

<body>
	<div id="contenu">
	
		<a href="accueil.php" alt"accueil"><div id="header"></div></a>
			
		<!-- Mise en page du menu central -->
		<?php include("module/menu.php"); ?>

		<!-- Mise en page de la navigation vertical au gauche -->
		<?php include("module/navigation.php"); ?>
		
		<div id="article_economie">
			<div align="center">
				<p></br>
						
					<!-- Article de la page -->
					<h1 id="mise_page_h1">Organisation economique</h1>
				</p>
			</div>
			<div id="justifier">
				<p>
					<h2 id="mise_page_h2">1 - Informations générales</h2>
					L'entreprise IT-BS SARL, dirigée par ROYEN Christophe, a été créée en 01 septembre 2009.<br />
					L'entreprise est une Société à responsabilité limitée (sans autre indication) au capital de 20 000 EURO , 
					son siège est immatriculé auprès des greffes et tribunaux de la ville de Belfort. Elle est enregistrée 
					avec le code NAF 9511Z qui correspond au secteur Réparation d'ordinateurs et d'équipements 
					périphériques.<br /><br />

					<img src="image/sarl.png" alt="SARL" id="center"
					style="border-radius:15px 15px 15px 15px;">

					<h2 id="mise_page_h2">2 - Information Juridique de l'entreprise</h2>

					Voici un tableau récapitulatif des informations juridique concernant l'entreprise IT-BS SARL
			</div>
			<div>
				<p>
					<table id="juridique">
						<tr>
							<td><strong>Immatriculation :</strong></td>
							<td>RCS Belfort</td>
							<td><strong>Type d'entreprise :</strong></td>
							<td>Société commerciale</td>
						</tr>

						<tr>
							<td><strong>Adresse :</strong></td>
							<td>RUE BECQUEREL 90000 BELFORT</td>
							<td><strong>Forme juridique :</strong></td>
							<td>Société à responsabilité limitée</td>
						</tr>

						</tr>
							<tr>
							<td><strong>Type d'établissement :</strong></td>
							<td>Siège</td>
							<td><strong>Date de création :</strong></td>
							<td>01 septembre 2009</td>
						</tr>

						<tr>
							<td><strong>SIREN :</strong></td>
							<td>514 828 045</td>
							<td><strong>Capital social :</strong></td>
							<td>20 000 EURO</td>
						</tr>

						<tr>
							<td><strong>SIRET :</strong></td>
							<td>514 828 045 00021</td>
							<td><strong>Secteur d'activité :</strong></td>
							<td>Réparation d'ordinateurs et de biens personnels et domestiques</td>
						</tr>
					</table>
				</p>
			</div>
		</div>

		<footer>Projet Tuteuré - S1C1 - iT-Bs</footer>
	</div>
</body>
</html>
