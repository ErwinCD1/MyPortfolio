<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlEntity extends CI_Controller {
		public function index(){
			//On appelle la vue pour le layout
			$this->middle = 'adminLayout';
			//On appelle le layout
		    	$this->layout();
		}
		
		public function GetEntity()
		{
			$Id = $this->uri->segment(0);
			var_dump($Id);
			$this->load->model('MdlEntity');
			$this->data['entity'] = $this->MdlEntity->getPeriodEntity($Id);
			$this->middle = 'adminLayout';
			$this->layout();
		}
		
		
		/*
		
		public function GetPeriodeEntity()
		{
			$this->load->model('MdlEntity');
			$this->data['entityP'] = $this->MdlEntity->getPeriodEntity();
			$this->middle = 'adminLayout';
			$this->layout();
		}
*/
}
?>