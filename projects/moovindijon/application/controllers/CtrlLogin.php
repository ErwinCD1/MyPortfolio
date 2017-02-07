<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlLogin extends CI_Controller {

	public function index()
	{
		if( isset($_COOKIE['user']) && isset($_COOKIE["testPhrase"]) &&$_COOKIE["testPhrase"] == md5($_COOKIE['user']."Ma1Super1Securite1Moovin". date("d-m-Y")))
		{
			redirect(base_url().'index.php/CtrlAdmin/index/', 'refresh');
		}
		$this->load->view('login');
	}
	
	public function disconnect()
	{
		setcookie("testPhrase",md5("adeedef"),01,'/');
		redirect(base_url(), 'refresh');
	}
	
	public function login()
	{
		$model = $this->load->model('MdlLogin');
			
		$unedata['loginUser'] = $_POST['txtUser'];
		$unedata['pwdUser'] = md5($_POST['txtPass']);
		
		$login = $this->MdlLogin->getLogin($unedata);
		
		if($login['auth'] == true)
		{
			
			$expire =24*3600; // on définit la durée du cookie, 1 jours
			
			setcookie("user",$unedata['loginUser'],time()+$expire,'/'); 
			setcookie("testPhrase",md5($unedata['loginUser']."Ma1Super1Securite1Moovin". date("d-m-Y")),time()+$expire,'/');  // on l'envoi
			
			redirect(base_url().'index.php/CtrlAdmin/index/', 'refresh');
		}
		else
		{
			redirect(base_url().'index.php/CtrlLogin/index/', 'refresh');
		}
	}
}


?>
