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
		
		<div id="article_presentation">
			<div align='center'>
				<p></br>
						
					<!-- Article de la page -->
					<p> Pour la presentation de l'Entreprise, cela va se faire en 3 etapes:</p></br></br></br>			
					<a href="HistoireEntreprise.php">Histoire De L'entreprise</a></br></br></br>
					<a href="NosPartenaires.php">Partenaires</a></br></br></br>
					<a href="PersonelEntreprise.php">Personel & cleints de l'entreprise</a></br></br></br>
				</p>
			</div>
		</div>

		<footer>Projet Tuteuré - S1C1 - iT-Bs</footer>
	</div>
</body>
</html>
