<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller 
 { 
   //set the class variable.
   var $template  = array();
   var $data      = array();
   //Load layout    
   public function layout() 
   {
	if( isset($_COOKIE['user']) && isset($_COOKIE["testPhrase"]) && $_COOKIE["testPhrase"] == md5($_COOKIE['user']."Ma1Super1Securite1Moovin". date("d-m-Y")))
	{
		// making temlate and send data to view.
	      $header = array('headerContent'=>'monHeader');

	      $left = '';

	      $middle = array('middle'=>$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);



	      $footer = "";

	     $this->template['header']   = $this->load->view('layout/header', $header, true);

	     $this->template['left']   = $this->load->view('layout/left', $left, true);

	     $this->template['middle'] = $this->load->view($this->middle, $middle, true);

	     $this->template['footer'] = $this->load->view('layout/footer', $footer, true);


	     $this->load->view('layout/index', $this->template);
	}
	else
	{
		redirect(base_url(),"refresh");
	}
     

   }

}