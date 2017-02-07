<!DOCTYPE html>
<html lang="fr">
<head>
     <meta charset="utf-8" />
     <title>Requête 2</title>
    <link rel="stylesheet" media="screen" href="mon_style.css">
</head>
<header> Projet BDD </header>
<body>

<?php
	$link = mysqli_connect('localhost','admin','admin','iut');
    if (!$link)
    {
        print('<br /> code Erreur de connexion : '.mysqli_connect_errno()); 
        print("<br /> Message d'erreur de connexion :".mysqli_connect_error()); 
        exit(); //termine le script courant 
    }
    else 
    {
		#REQUETE2
        $requete2 = "SELECT nom_dept,SUM(nbre_etu_1A_dept) AS Nombre_Total_Etu_1a,SUM(nbre_etu_2A_dept) AS Nombre_Total_Etu_2a,SUM(nbre_etu_1A_dept)+SUM(nbre_etu_2A_dept) AS Nombre_Total_Etu, annee_universitaire,nom_dept FROM Departement WHERE id_dept>1 GROUP BY nom_dept,annee_universitaire ORDER BY annee_universitaire,id_site, nom_dept;"; 
        $reponse2 =  mysqli_query($link, $requete2);
        while($ligne2=mysqli_fetch_array($reponse2))
        {
            $tab_nom[]=$ligne2;
        }

        #AFFICHAGE REQUETE2
        echo "<table><tr><th>Année universitaire</th><th>Nom du département</th><th>Nombre d'étudiant 1ère année</th><th>Nombre d'étudiant 2ème année</th><th>Nombre total d'étudiant</th></tr>";
        for($i=0;$i<count($tab_nom);$i++)
        {
            echo "<tr><td>".$tab_nom[$i]["annee_universitaire"]."</td><td>".$tab_nom[$i]["nom_dept"]."</td><td>".$tab_nom[$i]["Nombre_Total_Etu_1a"]."</td><td>".$tab_nom[$i]["Nombre_Total_Etu_2a"]."</td><td>".$tab_nom[$i]["Nombre_Total_Etu"]."</td></tr>";
        }
        echo "</table>";

    }

?>
</body>
</html>

