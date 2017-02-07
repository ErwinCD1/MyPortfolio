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
		
		<div id="article_influence">
			<div align="center">
				<p></br>
						
					<!-- Article de la page -->
					<h1 id="mise_page_h1">Organisation economique</h1>
				</p>
			</div>
			<div id="justifier">
				<p>
					<span id="ancre_influence"><h2 id="mise_page_h2">Zones d'influence économique</h2></span>
					L'influence représente un facteur clé dans l'économie de l'entreprise, elle délimite la zone d'influence
					principale de l'entreprise et permet de mieux cibler les potentiels clients. Dans le cas de l'entreprise
					iT-Bs, c'est grâce aux compétences des employés régulièrement entretenue que l'influence économique 
					principale se situe dans le Territoire de Belfort, La Franche-Comté et encore plus étendu, la France. 
					iT-Bs cibe des entreprises professionel, des particuliers, et des administrations.<br /><br />

					Voici une carte représentant l'influence de l'entreprise iT-Bs :
				</p>
			</div>
			
			<div id="center">
				<img src="image/carte_influence.jpg" alt="Carte de l'influence">
			</div>

			<div id="justifier">
				<p>
					<span id="ancre_chiffre"><h2 id="mise_page_h2">Chiffres clés de l'activité d'iT-Bs</h2></span>
					Quelques chiffres clés dans la domaine de l'administration par IT-Bs début 2012 :<br /><br />

					<table id="activite">
						<tr>
							<td><strong>Postes de travail système Windows :</strong></td>
							<td> 438 unités</td>
						</tr>

						<tr>
							<td><strong>Serveurs physiques :</strong></td>
							<td> 34 unités</td>
						</tr>

						</tr>
							<tr>
							<td><strong>Serveurs virtualisés :</strong></td>
							<td> 27 unités</td>
						</tr>

						<tr>
							<td><strong>Postes de travail Apple et périphériques :</strong></td>
							<td> 102 unités</td>
						</tr>

						<tr>
							<td><strong>Solutions NAS - SAN de stockage et sauvegardes (Linux) :</strong></td>
							<td> 21 unités</td>
						</tr>
					</table>
				</p>
			</div>
		</div>

		<footer>Projet Tuteuré - S1C1 - iT-Bs</footer>
	</div>
</body>
</html>
