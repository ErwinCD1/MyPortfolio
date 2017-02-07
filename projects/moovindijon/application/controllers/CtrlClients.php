<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlClients extends CI_Controller {

	public function index() { }
	
	/*public function showAddClient(){
		$result = "<div>
					Nom du client<br>
					<input type='text' id='txtName'><br>
					Prenom<br>
					<input type='text' id='txtFirstName'><br>
					Telephone<br>
					<input type='text' id='txtPhone'><br>
					Email<br>
					<input type='text' id='txtEmail'><br>
					Adresse<br>
					<input type='text' id='txtAddress'><br>
					<input type='button' value='Ajouter le client' onclick='AddClient()'>
				  </div>";
		echo $result;
	}*/

	public function addClient(){ 
		$lastName = $_POST['txtLastName'];
		$firstName = $_POST['txtFirstName'];
		$password = $_POST['txtPassword']
		$phoneNumber = $_POST['txtPhoneNUmer'];
		$address = $_POST['txtAddress'];
		$postalCode = $_POST['txtPostalCode'];	
		$postalCode = $_POST['txtCity'];		
	}
	
	
	public function GetClients()
	{
		$this->load->model('MdlClients');
		$data['clients'] = $this->MdlClients->getClients();
		$this->load->view('adminLayout',$data);

		//$this->load->view('adminLayout', $data);
	}

	
}
?>