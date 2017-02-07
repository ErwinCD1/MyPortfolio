<?php
class MdlPacks extends CI_Model{
	
	public function getPacks(){
		$sql = $this->db->query("SELECT * FROM pack");
		foreach($sql->result() as $rows){
			$data[] = $rows;
		}		
		return $data;
	}
	
	public function getLesPacks()
	{
		$sql = $this->db->query('
			SELECT * FROM pack
		');
		foreach($sql->result() as $row)
		{
			$data[] = $row;
		}
		return $data;
	}
}
?>
