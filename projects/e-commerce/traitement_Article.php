<?php
session_start();
$email = $_SESSION['email'];
#var_dump($email);die;
$chemise  =  $_POST['chemise'];
$pantalon = $_POST['pantalon'];
$veste  =  $_POST['veste'];

$prix_articles = array(
"prix_chemise"  =>  $_POST['prix_chemise'],
"prix_pantalon"  => $_POST['prix_pantalon'],
"prix_veste"  =>  $_POST['prix_veste']
);
$articles = array(
  "chemise"  =>  [$_POST['chemise']],
  "pantalon" =>  [$_POST['pantalon']],
  "veste"  =>  [$_POST['veste']]
);


$panier = array (
  array (
  			'article' =>	"chemise",
  			'qte' => $_POST['chemise'],
  			'prix' => $_POST['prix_chemise']
  ),

  array (
  			'article' =>	'pantalon',
  			'qte' => $_POST['pantalon'],
  			'prix' => $_POST['prix_pantalon']
  ),

  array (
  			'article' =>	'veste',
  			'qte' => $_POST['veste'],
  			'prix' => $_POST['prix_veste']
  ),
);



#var_dump($panier);die;

$_SESSION['panier'] = $panier;

header('Location:panier.php')
?>
