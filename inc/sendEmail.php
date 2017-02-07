<?php

// Replace this with your own email address
$siteOwnersEmail = 'erwin@charles-dufant.fr';


if($_POST) {

   $name = trim(stripslashes($_POST['contactName']));
   $email = trim(stripslashes($_POST['contactEmail']));
   $subject = trim(stripslashes($_POST['contactSubject']));
   $contact_message = trim(stripslashes($_POST['contactMessage']));

   // Check Name
	if (strlen($name) < 2) {
		$error['name'] = $name;
	}
	// Check Email
	if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{3}/is', $email)) {
		$error['email'] = $email;
	}
	// Check Message
	if (strlen($contact_message) < 10) {
		$error['message'] = "Veuillez saisir au moins 10 caractères dans votre message.";
	}
   // Subject
	if ($subject == '') { $subject = "formulaire de contact"; }


   // Set Message
   $message .= "Email de: " . $name . "<br />";
	 $message .= "Adresse e-mail: " . $email . "<br />";
   $message .= "Message: <br />";
   $message .= $contact_message;
   $message .= "<br /> ----- <br /> Ce courriel a été envoyé à partir du formulaire de contact de votre site. <br />";

   // Set From: header
   $from =  $name . " <" . $email . ">";

   // Email Headers
	$headers = "De: " . $from . "\r\n";
	$headers .= "Reply-To: ". $email . "\r\n";
 	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


   if (!$error) {

      ini_set("sendmail_from", $siteOwnersEmail); // for windows server
      $mail = mail($siteOwnersEmail, $subject, $message, $headers);

		if ($mail) { echo "OK"; }
      else { echo "Quelque chose c'est mal passé. Veuillez réessayer !"; }

	} # end if - no validation error

	else {

		$response = (isset($error['name'])) ? $error['name'] . "<br /> \n" : null;
		$response .= (isset($error['email'])) ? $error['email'] . "<br /> \n" : null;
		$response .= (isset($error['message'])) ? $error['message'] . "<br />" : null;

		echo $response;

	} # end if - there was a validation error

}

?>
