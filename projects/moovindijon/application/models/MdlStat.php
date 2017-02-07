<?php
class MdlStat extends CI_Model
{	
	function getMorePassSold() {
		$sql = $this->db->query('
			CREATE VIEW paidContract AS
	 			SELECT PackId , COUNT(Paid) AS nb
				FROM contract
				GROUP BY PackId
			
				SELECT PackId , nb 
				FROM paidContract1 
				HAVING paidContract1.nb = ( SELECT MAX(paidContract1.nb)FROM paidContract1);'
		);
		foreach($sql->result() as $row)
		{
			$data[] = $row;
		}
		return $data;
	}
	
	function getCountClient() {
		$sql = $this->db->query('
			SELECT count(client.Id) as nbClient FROM client
		');
		foreach($sql->result() as $row)
		{
			$data[] = $row;
		}
		return $data;
		
	
	}
	
	function getCountEntity() {
		$sql = $this->db->query('
			SELECT COUNT(id) AS nbEntity FROM entity
		');
		foreach($sql->result() as $row)
		{
			$data[] = $row;
		}
		return $data;
	}
	
	function getCountContrat() {
		$sql = $this->db->query('
			SELECT COUNT(id) AS nbContract FROM contract
		');
		foreach($sql->result() as $row)
		{
			$data[] = $row;
		}
		return $data;
	}
	
	function getCountType() {
		$sql = $this->db->query('
			SELECT COUNT(id) AS NbTotType FROM type
		');
		foreach($sql->result() as $row)
		{
			$data[] = $row;
		}
		return $data;
	}
	
	function getTop3faithfulClient() {
		$sql = $this->db->query('
			CREATE VIEW faithfulClient1 AS
				SELECT ClientId , client.LastName, COUNT(Paid) AS nb
				FROM contract , client
				WHERE contract.ClientId = client.id
				GROUP BY ClientId , client.LastName

			SELECT *
			FROM faithfulClient1
			ORDER BY nb DESC
			LIMIT 3
		');
		foreach($sql->result() as $row)
		{
			$data[] = $row;
		}
		return $data;
	}
	function getTopClientContrat() {
		$sql = $this->db->query('
			SELECT *
			FROM faithfulClient1
			ORDER BY nb DESC
			LIMIT 10	
		');
		foreach($sql->result() as $row)
		{
			$data[] = $row;
		}
		return $data;
	}
	
	function getEndSubscriptionClientLimit() {
		$sql = $this->db->query('
			SELECT id, ClientId, PackID, EndDate 
			FROM contract
			WHERE EndDate - INTERVAL 1 month <= CURDATE()
			AND Paid = 0
		');
		foreach($sql->result() as $row)
		{
			$data[] = $row;
		}
		return $data;
	}
	
	function getNbClientsByType() {
		$sql = $this->db->query('
			SELECT COUNT(client.Id) as nbClient,Count(entity.id) as nbEntity , type.Description as typeName
			FROM client,contract,entity,type
			WHERE client.Id = contract.ClientId 
			and contract.EntityId = entity.Id 
			and entity.TypeId = type.Id 
			GROUP by type.Description
		');
		foreach($sql->result() as $row)
		{
			$data[] = $row;
		}
		return $data;
	}
}
?>