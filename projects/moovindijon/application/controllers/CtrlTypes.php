<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlTypes extends CI_Controller {
	public function index(){ }
	
	/*public function addType(){
		$result = "<div>
					Libelle<br>
					<input type='text' id='txtDesc'><br>
				  </div>";
		return $result;
	}
	
	public function getTypes(){
		$fileName = base_url()."fluxJson/fluxType.txt";
		$data = file_get_contents($fileName);
		echo $data;
	}
	*/
	/*public function archiveType()
	{
		$idType = $_POST['idType'];
		var movieToDelete = (from m in _db.Moviees
                               where m.Id == id
                               select m).FirstOrDefault();
        return View(movieToDelete);
	}*/
}
