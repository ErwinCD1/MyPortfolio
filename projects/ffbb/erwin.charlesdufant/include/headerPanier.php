<html>
<head>
	<meta charset="utf-8" />
	<title><?php echo $titre_page ?></title>
	<link href="style.css" rel="stylesheet" type="text/css">
	<script src="jquery-2.1.1.js"></script>

	<script type="text/javascript"> // Fonction pour récupérer les informations du panier


var lesProduitsCommandes = new Array();
lesProduitsCommandes = JSON.parse(localStorage.getItem("valeurs"));


var montantTotal = 0;


var i = 0;
$(
	
	function myfunction(){
		for(var i = 0; i < lesProduitsCommandes.length; i++)
		{
			appendTablePanier(i);
		}
	}

		
/*		Fonction permettant de faire le calcul de la fonction total

	$("#txtValeurResultat").val( 
										(  ($(p1).attr("Prix")) *  $("#quantiteProduitTShirtRoseFfbb").val()    ).val()  - - 
										(  ($(p2).attr("Prix")) *  $("#quantiteProduitChaussetteFfbb").val()    ).val()  - - 
										(  ($(p3).attr("Prix")) *  $("#quantiteProduitTShirtFunFfbb").val()     ).val()  - - 
										(  ($(p4).attr("Prix")) *  $("#quantiteProduitMontreFfbb").val()        ).val()  - - 
										(  ($(p5).attr("Prix")) *  $("#quantiteProduitSacADosFfbb").val()       ).val()  - - 
										(  ($(p6).attr("Prix")) *  $("#quantiteProduitServietteFfbb").val()     ).val()  
			);*/

		
);

function appendTablePanier(i){
	$("#TabPanier").append(
		"<table><tr><td>"+lesProduitsCommandes[i].Id       + "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" +
			"</td><td>" + lesProduitsCommandes[i].Nom      + "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" +
			"</td><td>" + lesProduitsCommandes[i].Img      + "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;" + 
			"</td><td>" + lesProduitsCommandes[i].Prix     + "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" +
			"</td><td>" + lesProduitsCommandes[i].Quantite + "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" +
			"</td></tr></table>"
	);
}


		




		
	</script>




</script>

</head>
<body>