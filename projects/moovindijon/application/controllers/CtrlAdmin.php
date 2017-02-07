<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CtrlAdmin extends MY_Controller {
		public function index() {
			//On passe les data comme ca
		        $this->data['mesDonnees'] = 'toto';
		        //On appelle la vue pour le layout
			$this->middle = 'adminLayout';
			//On appelle le layout
		    	$this->layout();
		}
		
		public function GetClients() {
			$this->load->model('MdlClients');
			$this->data['clients'] = $this->MdlClients->getClients();
			$this->middle = 'adminLayout';
			$this->layout();
		}
// ---------------------------------------------------------------- AJOUT CLIENT AVEC FORM -------------------------------------------------------------------------------------------//		
		/// VALID FORM  /////
		
		public function GoVerificationCLIENT() 
	{
		$this->ValiderFormClient();
		
		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('adminlayout.php');

		}
		else
		{
			$data['lastNameErreur'] = $this->input->post('txtLastName');
			$data['firstNameErreur'] = $this->input->post('txtFirstName');
			$data['pwdErreur'] = $this->input->post('txtPassword');
			$data['phoneErreur'] = $this->input->post('txtPhoneNUmer');	
		
			$this->load->view('adminlayout.php',$data);
		}
	}
		
	function ValiderFormClient()
	{
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		
		$this->form_validation->set_rules('txtIdConnect', 'Login de connexion ','required');
		$this->form_validation->set_rules('txtLastName', 'Nom de famille ','required');
		$this->form_validation->set_rules('txtFirstName', 'Prénom ','required');			
		$this->form_validation->set_rules('txtPassword', 'Mot de passe ','required');	
		$this->form_validation->set_rules('txtPhoneNumber', 'numéro de téléphone ','required');	
		$this->form_validation->set_rules('txtAddress', 'adresse ','required');	
		$this->form_validation->set_rules('txtPostalCode', 'code postal ','required|numeric');	
		$this->form_validation->set_rules('txtCity', 'ville ','required');	
		$this->form_validation->set_rules('txtMail', 'Mail ','required|valid_emails');	
		
		$this->form_validation->set_message('required', 'Votre %s est requis');
	}	
		
		public function InsertClient() { 
		
			$this->ValiderFormClient();
			$this->data['unCLIENT'] = "Ajouter un Client";
			
			if($this->form_validation->run()==TRUE)
			{
				$txtIdConnect = $this->input->post('txtIdConnect');
				$txtLastName = $this->input->post('txtLastName');
				$txtFirstName =$this->input->post('txtFirstName');
				$txtPassword = $this->input->post('txtPassword');
				$txtPhoneNUmer = $this->input->post('txtPhoneNumber');
				$txtAddress =$this->input->post('txtAddress');
				$txtPostalCode = $this->input->post('txtPostalCode');
				$txtCity = $this->input->post('txtCity');
				$txtMail = $this->input->post('txtMail');
				//$txtLink = $this->input->post('txtLink');
				// Appel du modèle après chargement des DATA
				$model = $this->load->model('MdlClients');	
				// Appel de la méthode insertTask du MODELE
				$this->MdlClients->insertClient();
				//$this->index(); // reload la page d'acceuil'
				$this->data['Ajouter'] = true;

				
			}
			// Appel des informations données dans le formulaire de saisi avec son protocole de sécurité get ou post
			
			$this->middle = 'adminLayout';
			$this->layout();
		}
		
// ---------------------------------------------------------------- FIN AJOUT CLIENT AVEC FORM -------------------------------------------------------------------------------------------//	

// ---------------------------------------------------------------- DEBUT UpdateClient avec MODAL -------------------------------------------------------------------------------------------//	
		public function UpdateClient() {
			$this->load->model('MdlClients');
			$this->MdlClients->updateClient(); // update
			$this->data['clients'] = $this->MdlClients->getClients(); // réaffichage contenu data
			$this->middle = 'adminLayout';
			$this->layout();
		}
// ---------------------------------------------------------------- FIN UpdateClient avec MODAL -------------------------------------------------------------------------------------------//
// ---------------------------------------------------------------- GET TYPE                   -------------------------------------------------------------------------------------------//		
		public function GetTypes() 
		{
			$this->load->model('MdlTypes');
			$this->data['types'] = $this->MdlTypes->getTypes();
			$this->middle = 'adminLayout';
			$this->layout();
		}

// ---------------------------------------------------------------- DEBUT UpdateType avec MODAL -------------------------------------------------------------------------------------------//	
		public function UpdateType() {
			$this->load->model('MdlTypes');
			$this->MdlTypes->updateType(); // update
			$this->data['types'] = $this->MdlTypes->getTypes(); // réaffichage contenu data
			$this->middle = 'adminLayout';
			$this->layout();
		}
// ---------------------------------------------------------------- FIN UpdateType avec MODAL -------------------------------------------------------------------------------------------//		

// ---------------------------------------------------------------- DEBUT  AJOUT TYPE  AVEC FORM -------------------------------------------------------------------------------------------//			
	/// VALID FORM  /////
		
	public function GoVerificationTYPE() 
	{
		$this->ValiderFormType();
		
		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('adminlayout.php');
			
		}
		else
		{
			$data['DescriptionErreur'] = $this->input->post('txtDescription');
			$data['ViewErreur'] = $this->input->post('txtView');
		
			$this->load->view('adminlayout.php',$data);
		}
	}
		
	function ValiderFormType()
	{
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		
		$this->form_validation->set_rules('txtDescription', 'Description','required');

		
		$this->form_validation->set_message('required', 'La %s est requise pour un type');
	}	

	public function InsertType() { 
	
		$this->ValiderFormType();
		$this->data['unType'] = "Ajouter un Type";
		
		if($this->form_validation->run()==TRUE)
		{
			$txtDescription = $this->input->post('txtDescription');
			$txtView = $this->input->post('txtView');
			
			// Appel du modèle après chargement des DATA
			$model = $this->load->model('MdlTypes');	
			// Appel de la méthode insertTask du MODELE
			$this->MdlTypes->insertType();
			//$this->index(); // reload la page d'acceuil'
			$this->data['Ajouter'] = true;

		}
		// Appel des informations données dans le formulaire de saisi avec son protocole de sécurité get ou post
		$this->middle = 'adminLayout';
		$this->layout();
	}
 
 // ---------------------------------------------------------------- FIN AJOUT TYPE  AVEC FORM -------------------------------------------------------------------------------------------//	
	
		public function GetPacks() {
			$this->load->model('MdlPacks');
			$this->data['packs'] = $this->MdlPacks->getPacks();
			$this->middle = 'adminLayout';
			$this->layout();
		}
		
		public function GetEntity()
		{
			$this->load->model('MdlEntity');
			$this->data['entity'] = $this->MdlEntity->getEntity();
			$this->middle = 'adminLayout';
			$this->layout();
		}


// ---------------------------------------------------------------- DEBUT UpdateEntity avec MODAL -------------------------------------------------------------------------------------------//	
		public function UpdateEntity() {
			$this->load->model('MdlEntity');
			$this->MdlEntity->UpdateEntity(); // update
			$this->data['entity'] = $this->MdlEntity->getEntity(); // réaffichage contenu data
			$this->middle = 'adminLayout';
			$this->layout();
		}
// ---------------------------------------------------------------- FIN UpdateEntity avec MODAL -------------------------------------------------------------------------------------------//
		
// ---------------------------------------------------------------- DEBUT  AJOUT ENTITY  AVEC FORM -------------------------------------------------------------------------------------------//			
	/// VALID FORM  /////
		
	public function GoVerificationENTITY() 
	{
		$this->ValiderFormEntity();
		
		if($this->form_validation->run()==FALSE){
			$this->load->view('adminlayout.php');	
		}
		else{// lstId / lstView / txtName / txtAdress / txtPostalCode / txtCity / txtLongitude / txtLatitude / txtSite / txtLogo / txtDescription / txtPhone / txtMail
			$data['NameErreur'] = $this->input->post('txtName');
			$data['AddressErreur'] = $this->input->post('txtAdress');
			$data['PostalCodeErreur'] = $this->input->post('txtPostalCode');
			$data['CityErreur'] = $this->input->post('txtCity');
			$data['SiteErreur'] = $this->input->post('txtSite');
			$data['LogoErreur'] = $this->input->post('txtLogo');
			$data['DescriptionErreur'] = $this->input->post('txtDescription');
			$data['PhoneErreur'] = $this->input->post('txtPhone');
			$data['MailErreur'] = $this->input->post('txtMail');
		
			$this->load->view('adminlayout.php',$data);
		}
	}
		
	function ValiderFormEntity()
	{// lstId / lstView / txtName / txtAddress / txtPostalCode / txtCity / txtLongitude / txtLatitude / txtSite / txtLogo / txtDescription / txtPhone / txtMail

		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		
		//$this->form_validation->set_rules('LSTID', ' ID','required');
		//$this->form_validation->set_rules('LSTVIEW', ' VUE','required');
		$this->form_validation->set_rules('txtName', ' NOM','required');
		$this->form_validation->set_rules('txtAddress', ' ADRESSE','required');
		$this->form_validation->set_rules('txtPostalCode', ' CODE POSTAL','required|numeric');
		$this->form_validation->set_rules('txtCity', ' VILLE','required');
		$this->form_validation->set_rules('txtPhone', ' TELEPHONE','required');		
		$this->form_validation->set_rules('txtMail', 'MAIL','required|valid_emails');

		$this->form_validation->set_message('required', 'Le %s est requis pour une entité !');
	}	
		
	public function InsertEntity() { 
	
		$this->ValiderFormEntity();
		$this->data['uneEntity'] = "Ajouter une entite";
		
		
		//var_dump($this->form_validation->run());
		if($this->form_validation->run()==TRUE)
		{ // lstId / lstView / txtName / txtAddress / txtPostalCode / txtCity / txtLongitude / txtLatitude / txtSite / txtLogo / txtDescription / txtPhone / txtMail
			$LSTID = $this->input->post('LSTID');
			$lstViews = $this->input->post('lstViews');
			$txtName = $this->input->post('txtName');
			$txtAddress = $this->input->post('txtAddress');
			$txtPostalCode = $this->input->post('txtPostalCode');
			$txtCity = $this->input->post('txtCity');
			$txtLongitude = $this->input->post('txtLongitude');
			$txtLatitude = $this->input->post('txtLatitude');
			$txtSite = $this->input->post('txtSite');
			$txtLogo = $this->input->post('txtLogo');
			$txtPhone = $this->input->post('txtPhone');
			$txtMail = $this->input->post('txtMail');
			// Appel du modèle après chargement des DATA
			$model = $this->load->model('MdlEntity');	
			// Appel de la méthode insertTask du MODELE
			$this->MdlEntity->insertEntity();
			//$this->index(); // reload la page d'acceuil'
			$this->data['Ajouter'] = true;

		}
		// ID TYPE -> description
		$this->load->model('MdlTypes');
		
		$tmp = $this->MdlTypes->getTypes();
		
		$this->data['lstTypes'] = array();
		
		foreach($tmp as $value)
		{
			$this->data['lstTypes'][$value->Id] =  $value->Description;
		}
		///  VIEW -> infos table avec un distinct
		$this->load->model('Mdlentity');
		
		$tmp2 = $this->Mdlentity->getView();

		$this->data['lstViews'] = array();
		
		foreach($tmp2 as $value)
		{
			$this->data['lstViews'][$value->VIEW] =  $value->VIEW;
		}
		// Appel des informations données dans le formulaire de saisi avec son protocole de sécurité get ou post
		$this->middle = 'adminLayout';
		$this->layout();
	}
 
 // ---------------------------------------------------------------- FIN AJOUT ENTITY  AVEC FORM -------------------------------------------------------------------------------------------//	
		
		public function GetContracts()
		{
			$this->load->model('MdlContracts');
			$this->data['contract'] = $this->MdlContracts->getContracts();

				//////// ID Pack -> Name////////////////////////////////
				$this->load->model('MdlPacks');		
				$tmp = $this->MdlPacks->getPacks();
				$this->data['lstPacks'] = array();
				
				foreach($tmp as $value){
					echo "toto";
					$this->data['lstPacks'][$value->Id] =  $value->Name;
				}

			$this->middle = 'adminLayout';
			$this->layout();
		}

		public function GetContratsAssocies($idPack)
		{
			$this->load->model('MdlContracts');
			$this->data['contracts'] = $this->MdlContracts->getContractsAssocies($idPack);
			$this->middle = 'adminLayout';
			$this->layout();	
		}

		public function GetEntitesAssocies($idEntity)
		{
			$this->load->model('MdlEntity');			
			$this->data['entitys'] = $this->MdlEntity->getContractsAssocies($idEntity);
			$this->middle = 'adminLayout';
			$this->layout();
		}

		public function GetStats()
		{
		$model = $this->load->model('Mdlstat');
			$modelContracts = $this->load->model('MdlContracts');
			$modelPacks = $this->load->model('MdlPacks');
			$this->data['nbClient'] = $this->Mdlstat->getCountClient();
			$this->data['nbEntity'] = $this->Mdlstat->getCountEntity();
			$this->data['nbContracts'] = $this->Mdlstat->getCountContrat();
			
			
			//Pour le 1er Graphique
			$this->data['lesContrats'] = $this->MdlContracts->getNbContractsByPacks();//Get le nombre de contrats par packs
			$this->data['lesPacks'] = $this->MdlPacks->getPacks();// get les packs
			
			//Pour le 2ème Graphique
			$this->data['nbClientsByTypes'] = $this->Mdlstat->getNbClientsByType();
			$this->middle = 'adminLayout';
			$this->layout();
		}
		
		
		public function GetEntiteAssocies($idClient)
		{
			$this->load->model('MdlClients');			
			$this->data['entit'] = $this->MdlClients->getEntitesAssocies($idClient);
			
			
			$this->middle = 'adminLayout';
		    $this->layout();
		}
		

// ---------------------------------------------------------------- DEBUT UpdateContrat avec MODAL -------------------------------------------------------------------------------------------//	
		public function UpdateContract() {
			$this->load->model('MdlContracts');
			$this->MdlContracts->UpdateContract(); // update
			$this->data['contract'] = $this->MdlContracts->getContracts(); // réaffichage contenu data
			$this->middle = 'adminLayout';
			$this->layout();
		}
// ---------------------------------------------------------------- FIN UpdateContrat avec MODAL -------------------------------------------------------------------------------------------//
		
// ---------------------------------------------------------------- DEBUT  AJOUT CONTRAT  AVEC FORM -------------------------------------------------------------------------------------------//			
			/// VALID FORM  /////
		
	public function GoVerificationCONTRACT() {
		$this->ValiderFormCONTRACT();	
		if($this->form_validation->run()==FALSE){
			$this->load->view('adminlayout.php');	
		}
		else{
			$data['StartDateErreur'] = $this->input->post('txtStartDate');
			$data['EndDateErreur'] = $this->input->post('txtEndDate');
			$data['PriceErreur'] = $this->input->post('txtPrice');
		
			$this->load->view('adminlayout.php',$data);
		}
	}
		
	function ValiderFormCONTRACT(){
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		
		$this->form_validation->set_rules('txtStartDate', 'Date de début de contrat','required');
		$this->form_validation->set_rules('txtEndDate', 'Date de fin de contrat','required');
		$this->form_validation->set_rules('txtPrice', 'Prix Abonnement','required');				
		
		$this->form_validation->set_message('required', 'Votre %s est requis');
	}

	public function InsertCONTRACT() { 
		$this->ValiderFormCONTRACT();
		$this->data['unContrat'] = "Ajouter un Contrat";
		
		if($this->form_validation->run()==TRUE){	
		
			$lstEntity = $this->input->post('lstEntity');
			$lstClient = $this->input->post('lstClient');
			$lstPacks = $this->input->post('lstPacks');
			$txtStartDate = $this->input->post('txtStartDate');
			$txtEndDate = $this->input->post('txtEndDate');
			$txtPrice = $this->input->post('txtPrice');
			
			
			
			foreach( $_POST['cbxPaid'] as $valeurCbxPaid ) {
   				echo $valeurCbxPaid;
			}
			
			$valeurCbxPaid = $this->input->post('cbxPaid');
			
			// Appel du modèle après chargement des DATA
			$model = $this->load->model('Mdlcontracts');	
			// Appel de la méthode insertTask du MODELE
			$this->Mdlcontracts->insertContract();
			//$this->index(); // reload la page d'acceuil'
			$this->data['Ajouter'] = true;

		}
		/////////////////////////////////////////////////////////
		/////////////// ID Entity -> Name////////////////////////
		$this->load->model('MdlEntity');		
		$tmp = $this->MdlEntity->getEntity();
		$this->data['lstEntity'] = array();
		
		foreach($tmp as $value){
			$this->data['lstEntity'][$value->Id] =  $value->Name;
		}
		/////////////////////////////////////////////////////////
		//////// ID Client -> LastName FirstName////////////////
		$this->load->model('MdlClients');		
		$tmp = $this->MdlClients->getClients();
		$this->data['lstClient'] = array();
		
		foreach($tmp as $value){
			$this->data['lstClient'][$value->Id] =  $value->LastName;
		}
		/////////////////////////////////////////////////////////
		//////// ID Pack -> Name////////////////////////////////
		$this->load->model('MdlPacks');		
		$tmp = $this->MdlPacks->getPacks();
		$this->data['lstPacks'] = array();
		
		foreach($tmp as $value){
			$this->data['lstPacks'][$value->Id] =  $value->Name;
		}
		/////////////////////////////////////////////////////////
		/////////////////////////////////////////////////////////
		
		// Appel des informations données dans le formulaire de saisi avec son protocole de sécurité get ou post
		$this->middle = 'adminLayout';
		$this->layout();
	}
 
 // ---------------------------------------------------------------- FIN AJOUT CONNTRAT  AVEC FORM -------------------------------------------------------------------------------------------//	
		

}
?>