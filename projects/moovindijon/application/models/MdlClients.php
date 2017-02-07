<?php
class MdlClients extends CI_Model{
	
	public function getClients() {
		$sql = $this->db->query("SELECT * FROM client");
		foreach($sql->result() as $rows){
			$data[] = $rows;
		}		
		return $data;
	}
	
	
	public function getEntitesAssocies($idClient){
		$sql = $this->db->query("SELECT * FROM client,contract,entity WHERE client.Id = contract.ClientId AND contract.EntityId = entity.Id AND client.Id ='".$idClient."'");
		foreach($sql->result() as $rows){
			$data[] = $rows;
		}
		if(!empty($data))
		{
			return $data;
		}
		else{
			return  "null";
		}
	}
	
	function insertClient() {
		$sql = $this->db->query("		
			INSERT INTO `client`( `IdConnect`, `Password`, `LastName`, `FirstName`, `PhoneNumber`, `Address`, `PostalCode`, `City`, `MailAddress`, `Link`) 
			VALUES ('".$_POST['txtIdConnect']."','".md5($_POST['txtPassword'])."','".$_POST['txtLastName']."','".$_POST['txtFirstName']."',".$_POST['txtPhoneNumber'].",'".$_POST['txtAddress']."' ,".$_POST['txtPostalCode'].",'".$_POST['txtCity']."','".$_POST['txtMail']."','".$_POST['txtLink']."')
			");	
	}
	
	function updateClient() {
		$sql = $this->db->query("		
				UPDATE `client` SET 
									`LastName`     = '".$_POST['txtLastName']."',
									`FirstName`    = '".$_POST['txtFirstName']."',
									`PhoneNumber`  = ".$_POST['txtPhoneNumber'].",
									`Address`      = '".$_POST['txtAddress']."',
									`PostalCode`   = ".$_POST['txtPostalCode'].",
									`City`         = '".$_POST['txtCity']."',
									`MailAddress`  = '".$_POST['txtMailAddress']."',
									`Link`         = '".$_POST['txtLink']."' 
				WHERE Id = ".$_POST['txtId']."
			");

	}
	

}
?>
