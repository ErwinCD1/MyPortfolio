<?php
class MdlLogin extends CI_Model
{	

	function getLogin($data)
	{	
		$sql = $this->db->query('
			SELECT`loginUser`, `pwdUser` FROM `userAdministration`
		');

		
		$auth = array();
		$auth['auth'] = false;
		
		foreach($sql->result() as $row)
		{
			if($row->loginUser == $data['loginUser'])
			{
				if($row->pwdUser == $data['pwdUser'])
				{
					$auth['auth'] = true;
				}
			}

		}
		return $auth;
	}
}
?>