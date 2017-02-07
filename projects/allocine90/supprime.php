<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>formulaire suppr</title>
</head>
<body>
<?
//--------------------------------connexion BDD
$ma_connexion_mysql = mysqli_connect('localhost','root','tvolqogk','echarle3');
if (!$ma_connexion_mysql) {
    print("<br /> Message d'erreur de connexion :".mysqli_connect_error()); 
    exit();
}

$query = "DELETE FROM cinema WHERE id_Cinema=".$_GET["id_Cinema"].";";

mysqli_query($ma_connexion_mysql,$query);

?>
</body>
</html>