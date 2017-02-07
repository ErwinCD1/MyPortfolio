<?php $titre_page= "PPE1 - Mon Panier" ?>
<?php include("include/headerPanier.php"); ?>
<?php include("include/menu.php"); ?>

<!-- <table id="TabPanier">
	<caption id="panier"><h1><strong>Récapitulatif de votre commande : </strong></h1></caption>
			<thead>
				<tr>
					<th>Nom de l'article</th>
					<th>&nbsp;&nbsp;Image de l'article</th>
					<th>&nbsp;&nbsp;Prix de l'article</td>
					<th>&nbsp;&nbsp;Quantité</th>
				</tr>
			</thead>
			<tbody>
			<tr>
				<td>Chemise d'Arbitre Officielle 2014</th>
				<td><a href="#"><img src="http://www.ffbbstore.com/img/p/1889-910-large_default.jpg" width="200" height="100" title="Montre_FFBB" alt="TAB1"></a></td>
				<td>49,00 €</td>
				<td><input type="number" id="quantiteProduit" min="1" max="20" value="1"></td>
			</tr>
			<tr>
				<td>Veste d'Arbitre Officielle</td>
				<td><a href="#"><img src="http://www.ffbbstore.com/img/p/1646-538-large_default.jpg" width="200" height="100" title="Sac_à_do_LFB" alt="TAB2"></a></td>
				<td>55,00 €</td>
				<td><input type="number" id="quantiteProduit" min="1" max="20" value="1"></td>				
			</tr>
			<tr>
				<td>Pantalon d'Arbitre Officiel</td>
				<td><a href="#"><img src="http://www.ffbbstore.com/img/p/1604-497-large_default.jpg" width="200" height="100" title="Montre_FFBB" alt="TAB1"></a></td>
				<td>50,00 €</td>
				<td><input type="number" id="quantiteProduit" min="1" max="20" value="1"></td>				
			</tr>
			<tr>
				<td>Maillot adidas Equipe de France bleu</th>
				<td><a href="#"><img src="http://www.ffbbstore.com/img/p/1987-1145-large_default.jpg" width="200" height="100" title="Montre_FFBB" alt="TAB1"></a></td>
				<td>59,00 €</td>
				<td><input type="number" id="quantiteProduit" min="1" max="20" value="1"></td>				
			</tr>
			<tr>
				<td>Maillot collector adidas blanc à manche</td>
				<td><a href="#"><img src="http://www.ffbbstore.com/img/p/1986-1143-large_default.jpg" width="200" height="100" title="Sac_à_do_LFB" alt="TAB2"></a></td>
				<td>110,00 €</td>
				<td><input type="number" id="quantiteProduit" min="1" max="20" value="1"></td>
			</tr>
			<tr>
				<td>Conférencier FFBB</td>
				<td><a href="#"><img src="http://www.ffbbstore.com/img/p/1589-1059-large_default.jpg" width="200" height="100" title="Montre_FFBB" alt="TAB1"></a></td>
				<td>20,00 €</td>
				<td><input type="number" id="quantiteProduit" min="1" max="20" value="1"></td>

			</tr>
				<tr>		
					<td><h1>Total de la commande</h1></td>
					<td><p><input type="text" id="txtValeurResultat" name="txtValeurResultat"></p></td>
				</tr>
			</tbody>
</table> -->

<div id="TabPanier">
	<table>
		<tr>
			<td><h1>Id&nbsp;&nbsp;|</h1></td>
			<td><h1>&nbsp;&nbsp;Nom&nbsp;&nbsp;|</h1></td>
			<td><h1>&nbsp;&nbsp;Img&nbsp;&nbsp;|</h1></td>
			<td><h1>&nbsp;&nbsp;Prix&nbsp;&nbsp;|</h1></td>
			<td><h1>&nbsp;&nbsp;Quantite&nbsp;&nbsp;</h1></td>
		</tr>
		<h1>Total de la commande</h1>
			<p><input type="text" id="txtValeurResultat" name="txtValeurResultat"></p>
	</table>
</div>




<?php include("include/footer.php"); ?>