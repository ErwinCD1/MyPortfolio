<html>
<head>
	<meta charset="utf-8" />
	<title><?php echo $titre_page ?></title>
	<link href="style.css" rel="stylesheet" type="text/css">
	<script src="jquery-2.1.1.js"></script>
	


	<script>	

/*		$(
		function CalculerAddition() { 
		
			$("#txtValeurResultat").val( $("#txtValeurA").val() - - $("#txtValeurB").val()) 
			
		}*/

	</script>
	<script type="text/javascript"> // Fonction pour le panier

		// Constructeur d'un produit
		function Produit(unId , unNom , uneImg, unPrix , uneQuantite) {
			this.Id = unId;
			this.Nom = unNom;
			this.Img = uneImg;
			this.Prix = unPrix;
			this.Quantite = uneQuantite;
		}

		var lesProduitsCommandes = new Array();

		$(

			function myfunction() {
				$("#AjouterTShirtRoseFfbbPanier").click(
					//mettre dans le local storage les informations rentrés
							function() {
								// Créer un nouveau produit
								var p1 = new Produit(1,
												$("#TShirtRoseFfbbPanier").attr("id"),
												$("#AjouterTShirtRoseFfbbPanier").attr("src"),
												20.00,
												$("#quantiteProduitTShirtRoseFfbb").val()
								); 
								// Ranger produit dans le tableau
								lesProduitsCommandes[lesProduitsCommandes.length] = p1;
					   			// Ajout d'un nouvel objet dansle local storage et bien trier le tableau
					   			localStorage.setItem("valeurs",JSON.stringify(lesProduitsCommandes));
							}
				);

				$("#AjouterChaussetteFfbbPanier").click(
							function() {
								var p2 = new Produit(2,
												$("#ChaussetteFfbbPanier").attr("id"),
												$("#AjouterChaussetteFfbbPanier").attr("src"),
												10.00,
												$("#quantiteProduitChaussetteFfbb").val()
								); 
								// Ranger produit dans le tableau
								lesProduitsCommandes[lesProduitsCommandes.length] = p2;
					   			// Ajout d'un nouvel objet dansle local storage et bien trier le tableau
					   			localStorage.setItem("valeurs",JSON.stringify(lesProduitsCommandes));
							}
				);

				$("#AjouterTShirtFunFfbbPanier").click(
							function() {
								var p3 = new Produit(3,
												$("#TShirtFunFfbbPanier").attr("id"),
												$("#AjouterTShirtFunFfbbPanier").attr("src"),
												30.00,
												$("#quantiteProduitTShirtFunFfbb").val()
								); 
								// Ranger produit dans le tableau
								lesProduitsCommandes[lesProduitsCommandes.length] = p3;
					   			// Ajout d'un nouvel objet dansle local storage et bien trier le tableau
					   			localStorage.setItem("valeurs",JSON.stringify(lesProduitsCommandes));
							}
				);

				$("#AjouterMontreFfbbPanier").click(
							function() {
								var p4 = new Produit(4,
												$("#MontreFfbbPanier").attr("id"),
												$("#AjouterMontreFfbbPanier").attr("src"),
												49.00,
												$("#quantiteProduitMontreFfbb").val()
								); 
								// Ranger produit dans le tableau
								lesProduitsCommandes[lesProduitsCommandes.length] = p4;
					   			// Ajout d'un nouvel objet dansle local storage et bien trier le tableau
					   			localStorage.setItem("valeurs",JSON.stringify(lesProduitsCommandes));
							}
				);

				$("#AjouterSacADosFfbbPanier").click(
							function() {
								 var p5 = new Produit(5,
												$("#SacADosFfbbPanier").attr("id"),
												$("#AjouterSacADosFfbbPanier").attr("src"),
												9.00,
												$("#quantiteProduitSacADosFfbb").val()
								); 
								// Ranger produit dans le tableau
								lesProduitsCommandes[lesProduitsCommandes.length] = p5;
					   			// Ajout d'un nouvel objet dansle local storage et bien trier le tableau
					   			localStorage.setItem("valeurs",JSON.stringify(lesProduitsCommandes));
							}
				);

				$("#AjouterServietteFfbbPanier").click(
							function() {
								var p6 = new Produit(6,
												$("#ServietteFfbbPanier").attr("id"),
												$("#AjouterServietteFfbbPanier").attr("src"),
												15.00,
												$("#quantiteProduitServietteFfbb").val()
								); 
								// Ranger produit dans le tableau
								lesProduitsCommandes[lesProduitsCommandes.length] = p6;
					   			// Ajout d'un nouvel objet dansle local storage et bien trier le tableau
					   			localStorage.setItem("valeurs",JSON.stringify(lesProduitsCommandes));
							}
				);



			}
		);





</script>




</script>

</head>
<body>