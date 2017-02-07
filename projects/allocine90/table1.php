<?php
ini_set('display_errors', 1); 
?>


<!DOCTYPE html>
<?php $title = "Table"; ?>
<html lang="fr">
<?php include("include/head.php"); ?>
<body>
        <div id="body">
<?php include("include/menu.php"); ?>


<div class="fonttable">

    <form class="boite">
<?php
$ma_connexion_mysql = mysqli_connect('localhost','root','tvolqogk','echarle3');
mysqli_set_charset($ma_connexion_mysql, "utf8");
if (!$ma_connexion_mysql){
   print("<br />Code d'erreur de connexion: ".mysqli_connect_error());
   print("<br />Message d'erreur de connexion: ".mysqli_connect_error());
   exit();
}
?>
<?php
$query = "select * from CINEMA ;"; 
$reponse=mysqli_query($ma_connexion_mysql,$query);
mysqli_set_charset($ma_connexion_mysql, "utf8");
while ($line =  mysqli_fetch_array($reponse)) 
{  
    $data[]=$line; 
} 
mysqli_free_result($reponse);

$query = "DELETE FROM CINEMA WHERE id_Cinema=".$_GET["id_Cinema"].";";

mysqli_query($ma_connexion_mysql,$query);


?>
   

    <table border="2"> 
    <thead> 
    <center><h1 class="table">Affichage de la table cinéma</h1></center>
    <hr>
    <br/>
    <tr><th><center>ID Cinéma</center></th><th><center>Nom Cinema</center></th><th><center>Adresse Cinéma</center></th><th><center>Ville Cinéma</center></th><th><center>téléphone Cinéma</center></th><th><center>Nombre de salle</center></th>
    <th><center>Nombre de place total</center></th><th><center>Tarif Cinema</center></th><th><center>Nombre de place total</center></th><th><center>Tarif Cinema</center></th><th><center>Longitude</th><th><center>Latitude</center></th><th><center>Photo</center></th><th><center>Modif/Sup</center></th></tr> 
    </thead>

<table border="2">
<tbody>

<?
foreach ($data as $line) 
{        
    print("<tr >
    <td>".$cinema[0]."</td>
    <td>".$cinema[1]."</td>
    <td>".$cinema[2]."</td>
    <td>".$cinema[3]."</td>
    <td>".$cinema[4]."</td>
    <td>".$cinema[5]."</td>
    <td>".$cinema[6]."</td>
    <td>".$cinema[7]."</td>
    <td>".$cinema[8]."</td>
    <td>".$cinema[9]."</td>
    <td>".$cinema[10]."</td>
    <td>".$cinema[11]."</td>
    <td>".$cinema[12]."</td>
    <td>".$cinema[13]."</td>
    <td>".$cinema[14]."</td>
    <td><a href=\"table1.php?id_Cinema=".$cinema[0]."\"  role=\"button\">Modifier</a></td>
    <td><a href=\"table1.php?id_Cinema=".$cinema[0]."\"  role=\"button\" onclick=\"return(confirm('Etes-vous sûr de vouloir supprimer ".$cinema[1]."  ".$cinema[8]." ?'));\">Supprimer</a></td>"); 
} 
?>  

</tbody>
</table>


    </form></div></div>

    </body>
</html>

