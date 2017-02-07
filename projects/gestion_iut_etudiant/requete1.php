<!DOCTYPE html>
<html lang="fr">
<head>
     <meta charset="utf-8" />
     <title>Requête 1</title>
    <link rel="stylesheet" media="screen" href="mon_style.css">
</head>
<header> Projet BDD </header>
<body>

<?php

   //requete 1


    $link = mysqli_connect('localhost','admin','admin','iut'); 
    if (!$link)
    {
        print('<br /> code Erreur de connexion : '.mysqli_connect_errno()); 
        print("<br /> Message d'erreur de connexion :".mysqli_connect_error()); 
        exit(); //termine le script courant 
    }
    else 
    {
        #REQUETE1
        $requete1 = "SELECT nom_dept,description_dept FROM Departement WHERE id_dept>1 GROUP BY nom_dept;"; 
        $reponse1 =  mysqli_query($link, $requete1);
        while($ligne1=mysqli_fetch_array($reponse1))
        {
            $tab_nom[]=$ligne1;  
        }
        $requete1_bis ="SELECT libelle_site FROM Site WHERE id_site>0;";
        $reponse1_bis=mysqli_query($link, $requete1_bis);
        while($ligne1_bis=mysqli_fetch_array($reponse1_bis))
        {
            $tab_site[]=$ligne1_bis;

  
        }
    }
    echo "<table><tr><th>Nom des départements</th><th>Description</th></tr>";
    for($i=0;$i<count($tab_nom);$i++)
    {
        echo "<tr><td>".$tab_nom[$i]["nom_dept"]."</td><td>".$tab_nom[$i]["description_dept"]."</td></tr>";

    }
    echo "</table>";
    echo "<table><tr><th>Nom des sites</th></tr>";
    for($k=0;$k<count($tab_site);$k++)
    {
        echo "<tr><td>".$tab_site[$k]["libelle_site"]."</td></tr>";
    }
    echo "</table>";


?>

</body>
</html>
