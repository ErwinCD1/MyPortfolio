<!DOCTYPE html>
<html lang="fr">
<head>
     <meta charset="utf-8" />
     <title>Requête 4</title>
    <link rel="stylesheet" media="screen" href="mon_style.css">
</head>
<header> Requête 4 </header>
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
        //REQUETE4
        $requete4 = "SELECT annee_universitaire,SUM(nbre_etu_1A_dept) AS Nombre_Total_Etu_1a,SUM(nbre_etu_2A_dept) AS Nombre_Total_Etu_2a, SUM(nbre_etu_1A_dept)+SUM(nbre_etu_2A_dept) AS Nombre_Total_Etu FROM Departement WHERE id_dept>1 GROUP BY annee_universitaire;"; 
        $reponse4 =  mysqli_query($link, $requete4);
        while($ligne4=mysqli_fetch_array($reponse4))
        {
            $tab_nom[]=$ligne4;
        }
        echo "<table><tr><th>Année universitaire</th><th>Nombre d'étudiant 1ère année</th><th>Nombre d'étudiant 2ème année</th><th>Nombre total d'étudiant</th></tr>";
        for($i=0;$i<count($tab_nom);$i++)
        {
            echo "<tr><td>".$tab_nom[$i]["annee_universitaire"]."</td><td>".$tab_nom[$i]["Nombre_Total_Etu_1a"]."</td><td>".$tab_nom[$i]["Nombre_Total_Etu_2a"]."</td><td>".$tab_nom[$i]["Nombre_Total_Etu"]."</td></tr>";
        }

        echo "</table>";

    }

?>
</body>
</html>

