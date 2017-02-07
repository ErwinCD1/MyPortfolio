<!DOCTYPE html>
<html>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
	</script>

	<script> 
	$(document).ready(function(){
	  $("#flip").click(function(){
	    $("#panel").slideToggle("slow");
	  });
	});
	</script>

<!-- Mise en page de l'en tete, qui renvoie au design du site -->
<?php include("module/header.php"); ?>

<body>
	<div id="contenu">
	
		<a href="accueil.php" alt"accueil"><div id="header"></div></a>
			
			<!-- Mise en page du menu central -->
			<?php include("module/menu.php"); ?>

			<!-- Mise en page de la navigation vertical au gauche -->
			<?php include("module/navigation.php"); ?>
		
			<div id="article_partenaires">
				<div align='center'>
					<p></br>
						
						<!-- Article de la page -->

						<h1>Les partenaires d'iT-Bs</h1>
						</br>
						L'entreprise iT-Bs est soutenu dans son évolution par de nombreux partenaires locaux ou 
						nationaux,<br />pour afficher le défilement de ses deniers cliquer sur le bouton ci dessous.
					</p>
					
						<div id="flip">Pour voir les partenaires, cliquez-ici</div>
						<div id="panel">
							<table>

							
								<thead>
									<tr>
										<th><a href="http://www.franche-comte.fr">              <img src="image/partenaire1.png" width="175px" height="100px"  alt="Franche-comté Conseil régional"/>          </a></th>
										<th><a href="http://www.belfort.cci.fr">                <img src="image/partenaire2.png" width="175px" height="100px"  alt="Cci Territoire de Belfort"/>               </a></th>
										<th><a href="http://www.technhom.com">                  <img src="image/partenaire3.png" width="175px" height="100px"  alt="Techn'hom"/>                               </a></th>
									</tr>
								</thead>
								
								<tfoot>
									<tr>
										<td></td>
										<td></br><a href="http://www8.hp.com/fr/fr/home.html">   <img src="image/partenaire7.jpg" width="175px" height="100px"  alt="HP (Hewlett-Packard)"/>                    </a></td>
										<td></td>
									</tr>
								</tfoot>
								
								<tbody>
									<tr>
										
										<th></br><a href="http://www.artisan-comtois.com">       <img src="image/partenaire4.gif" width="175px" height="100px"  alt="Chambre des métiers er de l'artisanat"/>   </a></th>
										<th></br><a href="http://www.trinaps.com">               <img src="image/partenaire5.jpg" width="175px" height="100px"  alt="Trinaps"/>                                 </a></th>
										<th></br><a href="http://www.pc-infopratique.com">       <img src="image/partenaire6.gif" width="175px" height="100px"  alt="PC-InfoPratique"/>                         </a></th>
									</tr>
								</tbody>
							</table>
						</div>	
				</div>
			</div>
		<footer>Projet Tuteuré - S1C1 - iT-Bs</footer>
	</div>
</body>
</html>
