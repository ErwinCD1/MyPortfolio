<?php session_start();





$string = array (
				'client' =>	$_SESSION['email'],
  			'contenu_panier' => $_SESSION['panier'],
  			'prix' => $_SESSION['prixTotal']
);

#var_dump($string);die;

function checkAndWrite($name,$content)
	{
		if(file_exists($name) && is_readable($name) && is_writable($name)) {
			if (is_dir($name)){
				return "File is a directory,aborting";
			}
			else {
        file_put_contents($name ,"");
				file_put_contents($name ,$content, FILE_APPEND);
				return file_get_contents($name);
			}
		}
		else {
			file_put_contents($name,$content);
			return file_get_contents($name);
		}
	}

	foreach($string as $key => $value) {
	    checkAndWrite("facture.html",$value);
	  }




header('Location:paiement.php')

 ?>
