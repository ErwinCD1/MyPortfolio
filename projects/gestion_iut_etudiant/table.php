<!DOCTYPE html>
<html lang="fr">
<?php include("head.php"); ?>
<?php include("menu.php"); ?>
<link rel="stylesheet" type="text/css" media="screen" href="css-table.css" />
<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
<script type="text/javascript" src="js/style-table.js"></script>
<body class="body1">
<form class="boite">
<?php 
$ma_connexion_mysql = mysqli_connect('localhost','admin','admin','iut'); 
if (!$ma_connexion_mysql) {
    print("<br /> Message d'erreur de connexion :".mysqli_connect_error()); 
    exit();
} 
?> 
<?php
$query = "SELECT * FROM Departement;"; 
$reponse=mysqli_query($ma_connexion_mysql,$query);  
while ($line =  mysqli_fetch_row($reponse) ) 
{  
    $listes_depts[]=$line; 
} 
mysqli_free_result($reponse); 
?>
<table border="2"> 
<thead> 
<center><h1 class="table">Affichage de la table département.</h1></center>
<hr>
<br/>
<tr><th><center>Id_Dept</center></th><th><center>Nom</center></th><th><center>Déscription</center></th><th><center>Type</center></th><th><center>Nombre etu 1A</center></th>
<th><center>Nombre etu 2A</center></th><th><center>Longitude</center></th><th><center>Latitude</center></th><th><center>Année</center></th><th><center>Id_Site</th><th><center>Modif/Sup</center></th></tr> 
</thead> 
<tbody>
<?php 
foreach ($listes_depts as $depts) {        
    print("<tr><td>".$depts[0]."</td><td>".$depts[1]."</td>");
    print("<td>".$depts[2]."</td><td>".$depts[3]."</td>");
    print("<td>".$depts[4]."</td><td>".$depts[5]."</td>");
    print("<td>".$depts[6]."</td><td>".$depts[7]."</td>");
    print("<td>".$depts[8]."</td><td>".$depts[9]."</td>");  
    print('<td><a href="#.php?op=1&amp;id='.$depts[0].'">Modifier </a>  '."\n"); 
	 print('| '); 
    print('<a href="table.php?op=2&amp;id='.$depts[0].'"   onClick="confirm(\'suppression de '.$depts[1].'?\')">Supprimer </a> </td></tr>');   
} 

?>
</tbody>
</table>
<?php 
$ma_connexion_mysql = mysqli_connect('localhost','admin','admin','iut'); 
if (!$ma_connexion_mysql) {
    print("<br /> Message d'erreur de connexion :".mysqli_connect_error()); 
    exit();
} 
?> 
<?php 
if(isset($_GET["id"]))
{
    $ma_commande_SQL="DELETE FROM Departement WHERE id_dept=".$_GET["id"].";";
    if (!mysqli_query($ma_connexion_mysql, $ma_commande_SQL)) { 
        print('<br /> code Erreur : '.mysqli_errno($ma_connexion_mysql)); 
        exit(); 
    }
    else 
    {
	    echo"<br/>Indication: Département supprimé. <br />";
	    print('<a href="table.php">Actualiser la page.</a>');
    }
} 
?>
</form>

<?php include("script.php"); ?>
<?php include("footer.php"); ?>
</body>
</html>

