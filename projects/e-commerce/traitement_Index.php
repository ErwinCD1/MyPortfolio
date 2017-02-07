

 <?php
 session_start ();

 $mail  =  $_POST['email'];
 $pwd = $_POST['pwd'];

 $stringE = $email;
 $pattern = '/^([a-zA-Z0-1\-\.\_\*\+]+)(@)([a-zA-Z0-1\-]+)\.(ovh|com|fr|be|eu|org|net)$/';
 $replacement = '<b><u>$1$2$3.$4</u></b>';
 $email = preg_replace($pattern, $replacement, $stringE);

 $stringP = $pwd;
 $patern = '/^([a-zA-Z0-1\-\.\_\@\&\+]+)$/';


 if (empty($mail) || empty($pwd)) {
   header('Location:index.php');
}
else {
  $_SESSION['email'] = substr($_POST['email'], 0,5);



  $stringE = $email;
  $pattern = '/^([a-zA-Z0-1\-\.\_\*\+]+)(@)([a-zA-Z0-1\-]+)\.(ovh|com|fr|be|eu|org|net)$/';
  $replacement = '<b><u>$1$2$3.$4</u></b>';
  $email = preg_replace($pattern, $replacement, $stringE);

  $stringP = $pwd;
  $patern = '/^([a-zA-Z0-1\-\.\_\@\&\+]+)$/';
  header('Location:article.php');
}
 ?>
