<!DOCTYPE html>
<html lang="fr">
<head>
     <meta charset="utf-8" />
     <title>Requête 3</title>
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
        #REQUETE3
        $requete3 = "SELECT annee_universitaire,id_site,SUM(nbre_etu_1A_dept) AS Nombre_Total_Etu_1a,SUM(nbre_etu_2A_dept ) AS Nombre_Total_Etu_2a,SUM(nbre_etu_1A_dept)+SUM(nbre_etu_2A_dept) AS Nombre_Total_Etu FROM Departement WHERE id_dept>1 GROUP BY annee_universitaire,id_site;"; 
        $reponse3 =  mysqli_query($link, $requete3);
        
        while($ligne3=mysqli_fetch_array($reponse3))
        {
            $tab_nom[]=$ligne3;
        }

        #AFFICHAGE REQUETE 3
        echo "<table><tr><th>Annnée universitaire</th><th>Id du site</th><th>Nombre d'étudiant 1ère année</th><th>Nombre d'étudiant 2ème année</th><th>Nombre total d'étudiant</th><th></tr>";
        for($i=0;$i<count($tab_nom);$i++)
        {
            echo "<tr><td>".$tab_nom[$i]["annee_universitaire"]."</td><td>".$tab_nom[$i]["id_site"]."</td><td>".$tab_nom[$i]["Nombre_Total_Etu_1a"]."</td><td>".$tab_nom[$i]["Nombre_Total_Etu_2a"]."</td><td>".$tab_nom[$i]["Nombre_Total_Etu"]."</td></tr>";
        }

        echo "</table>";

    }

?>
</body>
</html>
