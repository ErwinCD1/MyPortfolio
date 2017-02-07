<?php
class MdlContracts extends CI_Model{
	
	public function getContractsAssocies($idPack){
		$sql = $this->db->query("SELECT contract.Id, entity.Name, client.LastName, pack.Name as packName, contract.StartDate,contract.EndDate, contract.Price, contract.Paid FROM contract,pack,entity,client WHERE contract.PackId = pack.Id AND contract.EntityId = entity.Id AND contract.ClientId = client.Id AND  pack.Id ='".$idPack."'");
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
	
	public function getContracts()
	{
		$sql = $this->db->query("SELECT contract.Id, entity.Name, client.LastName, pack.Name as packName, contract.StartDate,contract.EndDate, contract.Price, contract.Paid FROM contract,pack,entity,client WHERE contract.PackId = pack.Id AND contract.EntityId = entity.Id AND contract.ClientId = client.Id");
		foreach($sql->result() as $rows){
			$data[] = $rows;
		}		
		return $data;
	}
	public function getNbContractsByPacks(){
		$sql = $this->db->query("select Count(contract.Id) as nbContracts, pack.Name from pack Left JOIN contract on pack.Id = contract.PackId GROUP BY pack.Name");
		foreach($sql->result() as $rows){
			$data[] = $rows;
		}		
		return $data;
	}
	
	public function insertContract () { 
		$sql = $this->db->query("
			INSERT INTO `contract`(  `EntityId`, `ClientId`, `PackId`, `StartDate`, `EndDate`, `Price`, `Paid`) 
			VALUES ('".$_POST['lstEntity']."','".$_POST['lstClient']."','".$_POST['lstPacks']."','".$_POST['txtStartDate']."','".$_POST['txtEndDate']."','".$_POST['txtPrice']."','".$_POST['cbxPaid']."')
		");
	}


	function updateContract() {
		$sql = $this->db->query("		
				UPDATE `contract` SET 
									`PackId`     = '".$_POST['lstPacks']."',
									`StartDate`    = '".$_POST['txtStartDate']."',
									`EndDate`  =  '".$_POST['txtEndDate']."',
									`Price`      = '".$_POST['txtPrice']."',
									`Paid`         = '".$_POST['cbxPaid']."'
				WHERE Id = ".$_POST['txtId']."
			");

	}
}
?>
