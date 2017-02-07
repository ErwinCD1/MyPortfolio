<?php
class MdlEntity extends CI_Model
{	
	public function getEntity(){
		$sql = $this->db->query("SELECT* FROM entity ");
		foreach($sql->result() as $rows){
			$data[] = $rows;
		}		
		return $data;
	}
	
	public function getPeriodEntity($Id){
		$sql = $this->db->query("SELECT Start_P , End_P , Desc_P FROM periodef WHERE `IdEntity` = ".$Id
		);
		foreach($sql->result() as $rows){
			$data[] = $rows;
		}		
		return $data;
	}
	
	function getView() {
		$sql2 = $this->db->query('
			SELECT VIEW FROM `entity` GROUP BY VIEW
		');
		foreach($sql2->result() as $row2)
		
		{
			$data2[] = $row2;
		}
		return $data2;
	}


	public function getContractsAssocies($idEntity){
		$sql = $this->db->query("SELECT * FROM entity WHERE TypeId ='".$idEntity."'");
		foreach($sql->result() as $rows){
			$data[] = $rows;
		}
		if(!empty($data)) {
			return $data;
		}
		else{
			return  "null"; }
	}
	
	function insertEntity() {
		
		$sql3 = $this->db->query("		
			INSERT INTO `entity`( `TypeId`, `View`, `Name`, `Address`, `PostalCode`, `City`, `Longitude`, `Latitude`, `Site`, `Logo`, `Description`, `Phone`, `Email`) 
			VALUES (
					".$_POST['LSTID'].",'".$_POST['lstViews']."','".($_POST['txtName'])."','".$_POST['txtAddress']."','".$_POST['txtPostalCode']."','".$_POST['txtCity']."' ,".$_POST['txtLongitude'].",".$_POST['txtLatitude'].",'".$_POST['txtSite']."','".$_POST['txtLogo']."','".$_POST['txtDescription']."','".$_POST['txtPhone']."','".$_POST['txtMail']."')");
	
	}

	function updateEntity() {
		$sql = $this->db->query("		
				UPDATE `entity` SET 
									`Name`         = '".$_POST['txtName']."',
									`Address`      = '".$_POST['txtAddress']."',
									`PostalCode`   = ".$_POST['txtPostalCode'].",
									`City`         = '".$_POST['txtCity']."',
									`Site`         = '".$_POST['txtSite']."'
				WHERE Id = ".$_POST['txtId']."
			");

	}
	
	
	
}
?>
