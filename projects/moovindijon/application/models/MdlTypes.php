<?php
class MdlTypes extends CI_Model{
	
	public function getTypes(){
		$sql = $this->db->query("SELECT * FROM type");
		foreach($sql->result() as $rows){
			$data[] = $rows;
		}		
		return $data;
	}
	
	public function insertType () { 
		$sql = $this->db->query("
			INSERT INTO `type`(`Description`, `View`) 
			VALUES ('".$_POST['txtDescription']."','".$_POST['lstView']."')
		");
	}


	function updateType() {
		$sql = $this->db->query("		
				UPDATE `type` SET 
									`Description`     = '".$_POST['txtDescription']."',
									`View`    = '".$_POST['lstView']."' 
				WHERE Id = ".$_POST['txtId']."
			");

	}
}
?> 