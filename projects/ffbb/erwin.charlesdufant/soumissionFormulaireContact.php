<?php // écrit pdt les vacances de la Toussaint mais ne fonctionne pas encore
$to = "charleserwin1@outlook.fr";
$subject = "Form-contact";
$message =
"Nom et prenom: " . $_POST['name'] . "\r\n" .
"Adresse mail: " . $_POST['email'] . "\r\n" .
"Objet: " . $_POST['objet'] . "\r\n" .
"\r\n" .
"Message: " . $_POST['message'];
$from=$_POST['email'];
$headers = "From: $from" . "/r/n";
mail($to,$subject,$message,$headers);
?>


<?php $titre_page= "PPE1 - Contact" ?>
<?php include("include/header.php"); ?>
<?php include("include/menu.php"); ?>



<p style="color: white; position: relative;
top:30%; left: 30%;">
Le message  a été envoyé à l'administrateur du site !</p>

<p style="color: white; position: absolute;
top:30%; left: 50%;border:5px groove white;width:5.2%;padding:10px">
<a href="index.php">Retour Accueil</a></p>


<?php include("include/footer.php"); ?>