<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlContent extends MY_Controller {

	public function index()
	{
		//On passe les data comme ca
	        $this->data['mesDonnees'] = 'data';

	        //On appelle la vue pour le layout
		$this->middle = 'ctrlContent/index';
		//On appelle le layout
	    	$this->layout();
	}
}