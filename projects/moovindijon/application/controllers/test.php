<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlAccueil extends CI_Controller {
	
	public function index()
	{
		$this->load->view('Home');
	}
	
	public function GetStatsCategs(){
		$this->load->model('modelCategories');
		$data['categories'] = $this->modelCategories->getStatsCategories();
		$this->load->view('Home', $data);
	}
	
	public function GetAnnees(){
		$this->load->model('modelAnnee');
		$data['annees'] = $this->modelAnnee->getAnnees();
		$data['produit'] = $this->modelAnnee->getProduit();
		$this->load->view('Home', $data);
	}
	
	public function GetAnneeProduit($idProd, $idAnnee){
		$this->load->model('modelAnnee');
		$data['anprod'] = $this->modelAnnee->getStatsAns($idProd, $idAnnee);
		$this->load->view('Home',$data);
	}
}
