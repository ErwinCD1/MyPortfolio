<script type="text/javascript" src="<?php echo base_url(); ?>JS/functions.js"></script>
 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <br />
          <center><h1>Administration MoovinDijon</h1></center><br />
          <ol class="breadcrumb">
          <li><a href="<?php echo base_url();?>index.php/CtrlAdmin/index"><i class="fa fa-home"></i> <span>Accueil</span></a></li>
          
          </ol> 
        </section>
        
        <!-- Main content -->
        <section class="content">
<!-------------------------------------------------------------------------->
<?php // AFFICHAGE ENTITE

if(isset($this->data['entity']))
{		
	echo "<table class='table' id='lesEntites'><tr><th>Id Entité</th><th>Id Type</th><th>Nom</th><th>Adresse</th><th>Code Postal</th><th>Ville</th><th>Site Web</th></tr>";
	$i=0;
 	foreach($this->data['entity'] as $entity){
 		echo "<tr><td>".$entity->Id."</td>".
			 "<td>".$entity->TypeId."</td>".
			 "<td>".$entity->Name."</td>".
			 "<td>".$entity->Address."</td>".
			 "<td>".$entity->PostalCode."</td>".
			 "<td>".$entity->City."</td>".
			 "<td>".$entity->Site."</td>".
			  "<td>" ;
			 $i++;
			 ?>
			 <!-- Button trigger modal -->
<button type="button"  data-toggle="modal" data-target="#myModal<?php echo $i; ?>">Update</button>

<!-- Modal -->
 <?php
 echo form_open('CtrlAdmin/UpdateEntity',array('method'=>'post','autocomplete'=>'off'));          	
?>   
<div class="modal fade" id="myModal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Changement Informations Entité <?php echo $i; ?></h4>
      </div>
      <div class="modal-body">
        
		<div class="form-group has-feedback" >
			<?php echo form_input(array('name'=>'txtName','class'=>"form-control",'placeholder'=>"Nom",'value'=>$entity->Name),set_value('txtName')); ?> <span class="fa fa-building-o form-control-feedback"></span>
		</div>
		
		<div class="form-group has-feedback" >
			<?php echo form_input(array('name'=>'txtAddress','class'=>"form-control",'placeholder'=>"Adresse",'value'=>$entity->Address),set_value('txtAddress')); ?> <span class="fa fa-globe form-control-feedback"></span>
		</div>
		<div class="form-group has-feedback" >
			<?php echo form_input(array('name'=>'txtPostalCode','class'=>"form-control",'placeholder'=>"Code Postal",'value'=>$entity->PostalCode),set_value('txtPostalCode')); ?> <span class="fa fa-phone-square form-control-feedback"></span>
		</div>
		<div class="form-group has-feedback" >
			<?php echo form_input(array('name'=>'txtCity','class'=>"form-control",'placeholder'=>"Ville",'value'=>$entity->City),set_value('txtCity')); ?> <span class="fa fa-building-o form-control-feedback"></span>
		</div>
		<div class="form-group has-feedback" >
			<?php echo form_input(array('name'=>'txtSite','class'=>"form-control",'placeholder'=>"Adresse site web",'value'=>$entity->Site),set_value('txtSite')); ?> <span class="fa fa-building-o  form-control-feedback"></span>
		</div>
					<input type="hidden"  name="txtId" value="<?php echo $entity->Id; ?>">
      </div>
      <div class="modal-footer">
      	<input type="submit" class="btn btn-default"  value="Valider Changement Entité">
		<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
<?php echo form_close(); ?>
			 <?php
			 echo "</td></tr>";
 	}
 	echo '</table>';
}
//--------------------------------------------------------------FIN AFFICHAGE DES CLIENTS--------------------------------------------------------------//
?>

<?php // --------------------------------------------------------------AJOUT ENTITY DB--------------------------------------------------------------------------------//

if(isset($this->data['uneEntity']) && !empty($this->data['uneEntity'])) { ?>

<div class="container">
<div class="row">
<div class="col-lg-4 col-lg-offset-4">
	<div class="panel panel-primary">
		<div class="panel panel-heading text-center"><h1>Ajout d'une Entité</h1></div>
		<?php  
			echo form_open('CtrlAdmin/InsertEntity',array('method'=>'post','autocomplete'=>'off')); 
			echo form_error('txtName');
			echo form_error('txtAddress');
			echo form_error('txtPostalCode');
			echo form_error('txtCity');
			echo form_error('txtPhone');
			echo form_error('txtMail');
		?>
				<div class="panel panel-body text-center" >
					<div class="form-group" >
					<div class="form-group" >
						<?php echo form_label('Liste Description Type','LSTID')."<br/>";?>
							<?php echo form_dropdown('LSTID', $this->data['lstTypes'],set_value('LSTID'),array('class'=>"form-control"))."<br/><br/>"; ?>
					</div>
					<?php echo form_label('Liste VUE','lstViews')."<br/>";?>
						<?php echo form_dropdown('lstViews', $this->data['lstViews'],set_value('lstViews'),array('class'=>"form-control"))."<br/><br/>"; ?>
					</div>

					<div class="form-group has-feedback" >
						<?php echo form_input(array('name'=>'txtName','class'=>"form-control",'placeholder'=>"Nom Entité"),set_value('txtName')); ?> <span class="fa fa-building-o form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback" >
						<?php echo form_input(array('name'=>'txtAddress','class'=>"form-control",'placeholder'=>"Adresse Entité"),set_value('txtAddress')); ?> <span class="fa fa-building-o  form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback" >
						<?php echo form_input(array('name'=>'txtPostalCode','class'=>"form-control",'placeholder'=>" Code Postal Entité"),set_value('txtPostalCode')); ?> <span class="fa fa-building-o  form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback" >
						<?php echo form_input(array('name'=>'txtCity','class'=>"form-control",'placeholder'=>"Ville Entité"),set_value('txtCity')); ?> <span class="fa fa-building-o form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback" >
						<?php echo form_input(array('name'=>'txtLongitude','class'=>"form-control",'placeholder'=>"Longitude Entité"),set_value('txtLongitude')); ?> <span class="fa fa-globe form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback" >
						<?php echo form_input(array('name'=>'txtLatitude','class'=>"form-control",'placeholder'=>"Latitude Entité"),set_value('txtLatitude')); ?> <span class="fa fa-globe form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback" >
						<?php echo form_input(array('name'=>'txtSite','class'=>"form-control",'placeholder'=>"Site Entité"),set_value('txtSite')); ?> <span class="fa fa-cloud form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback" >
						<?php echo form_input(array('name'=>'txtLogo','class'=>"form-control",'placeholder'=>"LIEN Logo Entité"),set_value('txtLogo')); ?> <span class="fa fa-external-link form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback" >
						<?php echo form_textarea(array('name'=> 'txtDescription', 'id'=>'editor1' , 'class'=>'cke_1 cke cke_reset cke_chrome cke_editor_editor1 cke_ltr cke_browser_webkit'),set_value('txtDescription')); ?>
						<script>
					                CKEDITOR.replace( 'editor1' );
					            </script>
						
					</div>
					<div class="form-group has-feedback" >
						<?php echo form_input(array('name'=>'txtPhone','class'=>"form-control",'placeholder'=>"TELEPHONE Entité"),set_value('txtPhone')); ?> <span class="fa fa-phone-square form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback" >
						<?php echo form_input(array('name'=>'txtMail','class'=>"form-control",'placeholder'=>"Mail Entité"),set_value('txtMail')); ?> <span class="fa fa-envelope form-control-feedback"></span>
					</div>

					
				<?php
				echo form_submit(array('value'=>'Valider'));  

				?>
				</div>
				<?php 
					echo form_close();	
				?>
				<!---->
				<?php
					if(isset($this->data['Ajouter']) && $this->data['Ajouter'] == true) // attendre que le doc soit chargé pour effectuer l'ajout
					{
						echo "<script>$( document ).ready(function() {
      															   $('#myModal3').modal('show') ;
  							 });</script>";
					}
				?>
				 <!-- Modal -->
					  <div class="modal fade" id="myModal3" role="dialog">
					    <div class="modal-dialog">
					      <!-- Modal content-->
					      <div class="modal-content">
					        <div class="modal-header">
					        		<button type="button" class="close" data-dismiss="modal">&times;</button>
					          	<h4 class="modal-title">Entité Ajouté avec succès !!</h4>
					        </div>
					        <div class="modal-footer">
					          	<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
					        </div>
					      </div>
					    </div>
					  </div>
				<!---->		
			</div>
		</div>
	</div>
</div>
 <?php } ?>

<?php

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// AFFICHAGE DES CLIENTS

if(isset($this->data['clients']) && !empty($this->data['clients'])){		
	echo "<table class='table' id='lesClients'><tr><th>Id client</th><th>Login</th><th>Mot de Passe</th><th>Nom</th><th>Prenom</th><th>Telephone</th><th>Adresse</th><th>Code Postal</th><th>Ville</th><th>Email</th></tr>";
	
	$i = 0;
 	foreach($this->data['clients'] as $client){
 		echo "<tr><td>".$client->Id."</td>".
 			 "<td>".$client->IdConnect."</td>".
			 "<td>".$client->Password."</td>".
			 "<td>".$client->LastName."</td>".
			 "<td>".$client->FirstName."</td>".
			 "<td>".$client->PhoneNumber."</td>".
			 "<td>".$client->Address."</td>".
			 "<td>".$client->PostalCode."</td>".
			 "<td>".$client->City."</td>".
			 "<td>".$client->MailAddress."</td>".
			 "<td>".$client->Link."</td>".
			 "<td><a href='".base_url()."index.php/CtrlAdmin/GetEntiteAssocies/".$client->Id."'>
			 <input id=".$client->Id." type='button' value='Entités Associés'></input></a></td>".
			 
			 "<td>" ;
			 $i++;
			 ?>
			 <!-- Button trigger modal -->
<button type="button"  data-toggle="modal" data-target="#myModal<?php echo $i; ?>">Update</button>

<!-- Modal -->
 <?php
 echo form_open('CtrlAdmin/UpdateClient',array('method'=>'post','autocomplete'=>'off'));          	
?>   
<div class="modal fade" id="myModal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Changement Informations client <?php echo $i; ?></h4>
      </div>
      <div class="modal-body">
        
		<div class="form-group has-feedback" >
			<?php echo form_input(array('name'=>'txtLastName','class'=>"form-control",'placeholder'=>"Nom",'value'=>$client->LastName),set_value('txtLastName')); ?> <span class="fa fa-building-o form-control-feedback"></span>
		</div>
		
		<div class="form-group has-feedback" >
			<?php echo form_input(array('name'=>'txtFirstName','class'=>"form-control",'placeholder'=>"Prénom",'value'=>$client->FirstName),set_value('txtFirstName')); ?> <span class="fa fa-globe form-control-feedback"></span>
		</div>
		<div class="form-group has-feedback" >
			<?php echo form_input(array('name'=>'txtPhoneNumber','class'=>"form-control",'placeholder'=>"Téléphone",'value'=>$client->PhoneNumber),set_value('txtPhoneNumber')); ?> <span class="fa fa-phone-square form-control-feedback"></span>
		</div>
		<div class="form-group has-feedback" >
			<?php echo form_input(array('name'=>'txtAddress','class'=>"form-control",'placeholder'=>"Adresse",'value'=>$client->Address),set_value('txtAddress')); ?> <span class="fa fa-globe form-control-feedback"></span>
		</div>
		<div class="form-group has-feedback" >
			<?php echo form_input(array('name'=>'txtCity','class'=>"form-control",'placeholder'=>"Ville",'value'=>$client->City),set_value('txtCity')); ?> <span class="fa fa-building-o form-control-feedback"></span>
		</div>
		<div class="form-group has-feedback" >
			<?php echo form_input(array('name'=>'txtPostalCode','class'=>"form-control",'placeholder'=>"Code Postal",'value'=>$client->PostalCode),set_value('txtPostalCode')); ?> <span class="fa fa-building-o  form-control-feedback"></span>
		</div>
		<div class="form-group has-feedback" >
			<?php echo form_input(array('name'=>'txtMailAddress','class'=>"form-control",'placeholder'=>"Adresse Mail",'value'=>$client->MailAddress),set_value('txtMailAddress')); ?> <span class="fa fa-envelope form-control-feedback"></span>
		</div>
		<div class="form-group has-feedback" >
			<?php echo form_input(array('name'=>'txtLink','class'=>"form-control",'placeholder'=>"Link",'value'=>$client->MailAddress),set_value('txtLink')); ?> <span class="fa fa-envelope form-control-feedback"></span>
		</div>
					<input type="hidden"  name="txtId" value="<?php echo $client->Id; ?>">
      </div>
      <div class="modal-footer">
      	<input type="submit" class="btn btn-default"  value="Valider Changement Client">
		<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
<?php echo form_close(); ?>
			 <?php
			 echo "</td></tr>";
 	}
 	echo '</table>';
}
//--------------------------------------------------------------FIN AFFICHAGE DES CLIENTS--------------------------------------------------------------//
?>

					


<?php 
// --------------------------------------------------------------AJOUT CLIENT  DB--------------------------------------------------------------------------------//

if(isset($this->data['unCLIENT']) && !empty($this->data['unCLIENT'])) { ?>

<div class="container">
<div class="row">
<div class="col-lg-4 col-lg-offset-4">
	<div class="panel panel-primary">
		<div class="panel panel-heading text-center"><h1>Ajout d'un Client</h1></div>
		<?php 
			echo form_open('CtrlAdmin/InsertClient',array('method'=>'post','autocomplete'=>'off')); 
			echo form_error('txtIdConnect');
			echo form_error('txtLastName');
			echo form_error('txtFirstName');
			echo form_error('txtPassword');
			echo form_error('txtPhoneNumber');
			echo form_error('txtAddress');
			echo form_error('txtPostalCode');
			echo form_error('txtCity');
			echo form_error('txtMail');
		?>
				<div class="panel panel-body text-center" >
					<div class="form-group has-feedback" >
						<?php echo form_input(array('name'=>'txtIdConnect','class'=>"form-control",'placeholder'=>"Login"),set_value('txtIdConnect')); ?> <span class="fa fa-angle-double-left form-control-feedback"></span>
					</div>
					
					<div class="form-group has-feedback">
					     	<?php echo form_password(array('name'=>'txtPassword','class'=>"form-control",'placeholder'=>"Mot de passe")); ?> <span class="fa fa-lock form-control-feedback"></span>
					 </div>
					 
					 
					<div class="form-group has-feedback" >
						<?php echo form_input(array('name'=>'txtLastName','class'=>"form-control",'placeholder'=>"Nom de famille"),set_value('txtLastName')); ?> <span class="fa fa-male form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback">
					     	<?php echo form_input(array('id'=>'txtFirstName','name'=>'txtFirstName','class'=>"form-control",'placeholder'=>"Prénom"),set_value('txtFirstName')); ?> <span class="fa fa-male form-control-feedback"></span>
					</div>
					
					<div class="form-group has-feedback">
					     <?php echo form_input(array('name'=>'txtPhoneNumber','class'=>"form-control",'placeholder'=>"Numéro de téléphone"),set_value('txtPhoneNumber')); ?> <span class="fa  fa-phone form-control-feedback"></span>
					     </div>
					<div class="form-group has-feedback">
					     <?php echo form_input(array('name'=>'txtAddress','class'=>"form-control",'placeholder'=>"Adresse"),set_value('txtAddress')); ?> <span class="fa fa-home form-control-feedback"></span>
					     </div>
					<div class="form-group has-feedback">
					     <?php echo form_input(array('name'=>'txtPostalCode','class'=>"form-control",'placeholder'=>"Code Postal"),set_value('txtCodePostal')); ?> <span class="fa fa-home form-control-feedback"></span>
					     </div>
					<div class="form-group has-feedback">
					     <?php echo form_input(array('name'=>'txtCity','class'=>"form-control",'placeholder'=>"Ville"),set_value('txtCity')); ?> <span class="fa fa-home form-control-feedback"></span>  
					</div>     
					<div class="form-group has-feedback">
					     <?php echo form_input(array('name'=>'txtMail','class'=>"form-control",'placeholder'=>"Mail"),set_value('txtMail')); ?> <span class="fa fa-envelope form-control-feedback"></span>  
					</div>      
					<div class="form-group has-feedback">
					     <?php echo form_input(array('name'=>'txtLink','class'=>"form-control",'placeholder'=>"Link"),set_value('txtLink')); ?> <span class="fa fa-link form-control-feedback"></span>  
					</div>  
				<?php
				echo form_submit(array('value'=>'Valider'));  

				?>
				</div>
				<?php 
					echo form_close();	
				?>
				<!---->
				<?php
					if(isset($this->data['Ajouter']) && $this->data['Ajouter'] == true) // attendre que le doc soit chargé pour effectuer l'ajout'
					{
						echo "<script>$( document ).ready(function() {
							         $('#myModal').modal('show') ;
							    });</script>";
					}
				?>
				 <!-- Modal -->
					  <div class="modal fade" id="myModal" role="dialog">
					    <div class="modal-dialog">
					      <!-- Modal content-->
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">Client Ajouté avec succès !!</h4>
					        </div>
					        <div class="modal-footer">
					          <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
					        </div>
					      </div>
					    </div>
					  </div>
				<!---->		
			</div>
		</div>
	</div>
</div>

</script>
 <?php } ?>

<?php
//////////////////////////////////////////////////////////// AFFICHAGE DES TYPES //////////////////////////////////////////////////////////////////////////////


if(isset($this->data['types'])){
	echo "<table class='table' id='lesTypes'><tr><th>Id Type</th><th>Nom Type</th><th>Description</th><th>Vue</th></tr>";
 	$i=0;
 	foreach($this->data['types'] as $type){
 		echo "<tr><td>".$type->Id."</td>".
			 "<td>".$type->Description."</td>".
			 "<td>".$type->View."</td>".
			 "<td><a href='".base_url()."index.php/CtrlAdmin/GetEntitesAssocies/".$type->Id."'>
			 <input id=".$type->Id." type='button' value='Entités Associés'></input></a></td>".
			 
			 "<td>" ;
			 $i++;
			 ?>
			 <!-- Button trigger modal -->
<button type="button"  data-toggle="modal" data-target="#myModal<?php echo $i; ?>">Update</button>

<!-- Modal -->
 <?php
 echo form_open('CtrlAdmin/UpdateType',array('method'=>'post','autocomplete'=>'off'));          	
?>   
<div class="modal fade" id="myModal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Changement Informations Type <?php echo $i; ?></h4>
      </div>
      <div class="modal-body">

      <div class="form-group has-feedback" >
			<?php echo form_input(array('name'=>'txtDescription','class'=>"form-control",'placeholder'=>"Nom Type",'value'=>$type->Description),set_value('txtDescription')); ?> <span class="fa fa-building-o form-control-feedback"></span>
	  </div>
        
	  <div class="form-group" >
			<?php echo form_label('Type de vue','lstView')."<br/>";?>
							<?php
								$options = array(
             									   'Week'  => 'Week',
									               'BusTram'    => 'BusTram',
									               'SNCF'   => 'SNCF',
									               'Content' => 'Content',
									               'Plan' => 'Plan',
									                );
				  echo form_dropdown('lstView', $options,set_value('lstView'),array('class'=>"form-control"))."<br/><br/>"; ?>
		</div>
					<input type="hidden"  name="txtId" value="<?php echo $type->Id; ?>">
      </div>
      <div class="modal-footer">
      	<input type="submit" class="btn btn-default"  value="Valider Changement type">
		<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
<?php echo form_close(); ?>
			 <?php
			 echo "</td></tr>";
 	}
 	echo '</table>';
}
//--------------------------------------------------------------FIN AFFICHAGE DES TYPES--------------------------------------------------------------//
?>




<?php // --------------------------------------------------------------AJOUT TYPE DB--------------------------------------------------------------------------------//

if(isset($this->data['unType']) && !empty($this->data['unType'])) { ?>

<div class="container">
<div class="row">
<div class="col-lg-4 col-lg-offset-4">
	<div class="panel panel-primary">
		<div class="panel panel-heading text-center"><h1>Ajout d'un TYPE</h1></div>
		<?php 
			echo form_open('CtrlAdmin/InsertType',array('method'=>'post','autocomplete'=>'off')); 
			echo form_error('txtDescription');
			echo form_error('txtView');
		?>
				<div class="panel panel-body text-center" >
					<div class="form-group has-feedback" >
						<?php echo form_input(array('name'=>'txtDescription','class'=>"form-control",'placeholder'=>"Description"),set_value('txtDescription')); ?> <span class="fa fa-file-text form-control-feedback"></span>
					</div>
					<div class="form-group" >

						<?php echo form_label('Type de vue','lstView')."<br/>";?>
							<?php
								$options = array(
             									     'Week'  => 'Week',
									               'BusTram'    => 'BusTram',
									               'SNCF'   => 'SNCF',
									                'Content' => 'Content',
									                'Plan' => 'Plan',
									                );
							echo form_dropdown('lstView', $options,set_value('lstView'),array('class'=>"form-control"))."<br/><br/>"; ?>
					</div>

				<?php
				echo form_submit(array('value'=>'Valider'));  

				?>
				</div>
				<?php 
					echo form_close();	
				?>
				<!---->
				<?php
					if(isset($this->data['Ajouter']) && $this->data['Ajouter'] == true) // attendre que le doc soit chargé pour effectuer l'ajout
					{
						echo "<script>$( document ).ready(function() {
      															   $('#myModal2').modal('show') ;
  									  });</script>";
					}
				?>
				 <!-- Modal -->
					  <div class="modal fade" id="myModal2" role="dialog">
					    <div class="modal-dialog">
					      <!-- Modal content-->
					      <div class="modal-content">
					        <div class="modal-header">
					        		<button type="button" class="close" data-dismiss="modal">&times;</button>
					          	<h4 class="modal-title">Type Ajouté avec succès !!</h4>
					        </div>
					        <div class="modal-footer">
					          	<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
					        </div>
					      </div>
					    </div>
					  </div>
				<!---->		
			</div>
		</div>
	</div>
</div>
 <?php } ?>
 
 
 
 
 
 <?php // --------------------------------------------------------------AJOUT Contrat DB--------------------------------------------------------------------------------//

if(isset($this->data['unContrat']) && !empty($this->data['unContrat'])) { ?>

<div class="container">
<div class="row">
<div class="col-lg-4 col-lg-offset-4">
	<div class="panel panel-primary">
		<div class="panel panel-heading text-center"><h1>Ajout d'un Contrat</h1></div>
		<?php echo form_open('CtrlAdmin/InsertCONTRACT',array('method'=>'post','autocomplete'=>'off')); ?>
				<div class="panel panel-body text-center" >
					<div>
					<?php echo form_label('Liste Entité','lstEntity')."<br/>";?>
						<?php echo form_dropdown('lstEntity', $this->data['lstEntity'],set_value('lstEntity'),array('class'=>"form-control"))."<br/><br/>"; ?>
					</div>
					<div>
					<?php echo form_label('Liste Client','lstClient')."<br/>";?>
						<?php echo form_dropdown('lstClient', $this->data['lstClient'],set_value('lstClient'),array('class'=>"form-control"))."<br/><br/>"; ?>
					</div>
					<div>					
					<?php echo form_label('Liste Pack','lstPacks')."<br/>";?>
						<?php echo form_dropdown('lstPacks', $this->data['lstPacks'],set_value('lstPacks'),array('class'=>"form-control"))."<br/><br/>"; ?>
					</div>					
					<div class="form-group has-feedback">
					     	<?php echo form_input(array('id'=>'txtStartDate','name'=>'txtStartDate','class'=>"form-control",'placeholder'=>"Date de début de contrat - AAAA-MM-JJ"),set_value('txtStartDate')); ?> <span class="fa fa-calendar form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback">
					     	<?php echo form_input(array('id'=>'txtEndDate','name'=>'txtEndDate','class'=>"form-control",'placeholder'=>"Date de fin de contrat - AAAA-MM-JJ"),set_value('txtEndDate')); ?> <span class="fa fa-calendar form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback">
					     	<?php echo form_input(array('id'=>'txtPrice','name'=>'txtPrice','class'=>"form-control",'placeholder'=>"Prix Abonnement"),set_value('txtPrice')); ?> <span class="fa fa-euro form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback">
					     	<?php echo form_checkbox('cbxPaid[]', 'Payé', FALSE); ?> Payé
					</div>

				<?php echo form_submit(array('value'=>'Valider'));  ?>
				</div>
				<?php 
					echo form_close();	
				?>
				<!---->
				<?php
					if(isset($this->data['Ajouter']) && $this->data['Ajouter'] == true) // attendre que le doc soit chargé pour effectuer l'ajout
					{
						echo "<script>$( document ).ready(function() {
      															   $('#myModal2').modal('show') ;
  									  });</script>";
					}
				?>
				 <!-- Modal -->
					  <div class="modal fade" id="myModal2" role="dialog">
					    <div class="modal-dialog">
					      <!-- Modal content-->
					      <div class="modal-content">
					        <div class="modal-header">
					        		<button type="button" class="close" data-dismiss="modal">&times;</button>
					          	<h4 class="modal-title">Contrat Ajouté avec succès !!</h4>
					        </div>
					        <div class="modal-footer">
					          	<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
					        </div>
					      </div>
					    </div>
					  </div>
				<!---->		
			</div>
		</div>
	</div>
</div>
 <?php } 
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 ?>

<?php

// AFFICHAGE DES PACKS

if(isset($this->data['packs'] ))
{
 	echo "<table class='table' id='lesPacks'><tr>
 	<th>Id Pack</th>
 	<th>Nom</th>
	<th>Description</th>
	<th>Durée</th>
	<th>Prix</th>
	<th>Nb Event Max</th>
			<th>Type de visibilité</th>";
 	foreach($this->data['packs'] as $pack)
 	{
 		echo "<tr><td>".$pack->Id."</td>".
			 "<td>".$pack->Name."</td>".
			 "<td>".$pack->Description."</td>".
			 "<td>".$pack->Duration."</td>".
			 "<td>".$pack->Price."</td>".
			 "<td>".$pack->MaxEventNumber."</td>".
			 "<td>".$pack->VisibilityType."</td>".
			 "<td><a href='".base_url()."index.php/CtrlAdmin/GetContratsAssocies/".$pack->Id."'>
			 <input id=".$pack->Id." type='button' value='Contrats Associés'></input></a></td></tr>";
 	}
 	echo '</table>';
}

// AFFICHAGE DES CONTRATS DANS LE PACK ASSOCIE

if(isset($this->data['contracts']) && !empty($this->data['contracts']))
{
	if($this->data['contracts'] == "null")
	{
		echo "<h3 align='center'>Aucun contrat associé</h3>";
	}
	else
	{
		echo "<table class='table' id='lesPacks'><tr><th>Id Contrat</th><th>Nom Entité</th>
		<th>Nom Client</th>
		<th>Nom Pack</th>
		<th>Date Debut Contrat</th>
		<th>Date Fin Contrat</th>
		<th>Prix</th>
		<th>Payé</th>
		</tr>";
 		foreach($this->data['contracts'] as $contract)
 		{
 			echo "<tr><td>".$contract->Id."</td>".
				 "<td>".$contract->Name."</td>".
				 "<td>".$contract->LastName."</td>".
				 "<td>".$contract->packName."</td>".
				 "<td>".$contract->StartDate."</td>".
				 "<td>".$contract->EndDate."</td>".
				 "<td>".$contract->Price."</td>".
				 "<td>".$contract->Paid."</td></tr>";
 		}
 		echo '</table>';	
			
	}	
}



/////////////////////////////////////////////////////////////////////////////////// AFFICHAGE DES CONTRATS  + MODAL  ////////////////////////////////////////////////////////////////////////////

if(isset($this->data['contract']))
{
 	echo "<table class='table' id='lesPacks'><tr><th>Id Contrat</th><th>Nom Entité</th><th>Nom Client</th><th>Nom Pack</th><th>Date Debut Contrat</th><th>Date Fin Contrat</th><th>Prix</th><th>Payé</th></tr>";
 	$i=0;
 	foreach($this->data['contract'] as $contract)
 	{
 		$paye = $contract->Paid;		
		$now = date("Y-m-d"); 
		$next = $contract->EndDate;
		$now = new DateTime( $now ); 	 
		$next = new DateTime( $next ); 
		$next = $next->modify('- 1 month');
		$next = $next->format("Ymd");
		$now = $now->format("Ymd");
		
		if($now >= $next && $paye != 1)
		{
			echo "<tr><td bgcolor='#ff0006'>".$contract->Id."</td>".
			 "<td bgcolor='#ff0006'>".$contract->Name."</td>".
			 "<td bgcolor='#ff0006'>".$contract->LastName."</td>".
			 "<td bgcolor='#ff0006'>".$contract->packName."</td>".
			 "<td bgcolor='#ff0006'>".$contract->StartDate."</td>".
			 "<td bgcolor='#ff0006'>".$contract->EndDate."</td>".
			 "<td bgcolor='#ff0006'>".$contract->Price."</td>".
			 "<td bgcolor='#ff0006'>".$contract->Paid."</td>";
		}
		else
		{
			echo "<tr><td>".$contract->Id."</td>".
				 "<td>".$contract->Name."</td>".
				 "<td>".$contract->LastName."</td>".
				 "<td>".$contract->packName."</td>".
			 	"<td>".$contract->StartDate."</td>".
			 	"<td>".$contract->EndDate."</td>".
			 	"<td>".$contract->Price."</td>".
			 	"<td>".$contract->Paid."</td>";
		}
 			echo "<td>" ;
			 $i++;
			 ?>
<!-- Button trigger modal -->

<button type="button" data-toggle="modal" data-target="#myModal<?php echo $i; ?>">Update</button>

<!-- Modal -->
 <?php
 echo form_open('CtrlAdmin/UpdateContract',array('method'=>'post','autocomplete'=>'off'));          	
?>   
<div class="modal fade" id="myModal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Changement Informations Entité <?php echo $i; ?></h4>
      </div>
      <div class="modal-body">

					<div>					
					<?php echo form_label('Liste Pack','lstPacks')."<br/>";?>
						<?php echo form_dropdown('lstPacks', $this->data['lstPacks'],set_value('lstPacks'),array('class'=>"form-control"))."<br/><br/>"; ?>
					</div>					
					<div class="form-group has-feedback">
					     	<?php echo form_input(array('id'=>'txtStartDate','name'=>'txtStartDate','class'=>"form-control",'placeholder'=>"Date de début de contrat - AAAA-MM-JJ",'value'=>$contract->StartDate),set_value('txtStartDate')); ?> <span class="fa fa-calendar form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback">
					     	<?php echo form_input(array('id'=>'txtEndDate','name'=>'txtEndDate','class'=>"form-control",'placeholder'=>"Date de fin de contrat - AAAA-MM-JJ",'value'=>$contract->EndDate),set_value('txtEndDate')); ?> <span class="fa fa-calendar form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback">
					     	<?php echo form_input(array('id'=>'txtPrice','name'=>'txtPrice','class'=>"form-control",'placeholder'=>"Prix Abonnement",'value'=>$contract->Price),set_value('txtPrice')); ?> <span class="fa fa-euro form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback">
					     	<?php echo form_checkbox('cbxPaid', 'Payé', FALSE); ?> Payé
					</div>

      
					<input type="hidden"  name="txtId" value="<?php echo $contract->Id; ?>">
      </div>
      <div class="modal-footer">
      	<input type="submit" class="btn btn-default"  value="Valider Changement type">
		<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
<?php echo form_close(); ?>
			 <?php
			 echo "</td></tr>";
 	}
 	echo '</table>';
}
//--------------------------------------------------------------FIN AFFICHAGE DES TYPES--------------------------------------------------------------//
?>
		
<?php

// AFFICHAGE ENTITE ASSOCIE AU TYPE

if(isset($this->data['entitys']) && !empty($this->data['entitys']))
{
	if($this->data['entitys'] == "null")
	{
		echo "<h3 align='center'>Aucune entité associé</h3>";
	}
	else
	{
		echo "<table class='table' id='lesEntites'><tr><th>Id Entité</th><th>Id Type</th><th>Nom</th><th>Adresse</th><th>Code Postal</th><th>Ville</th><th>Site</th></tr>";
	 	foreach($this->data['entitys'] as $entity)
	 	{
	 		echo "<tr><td>".$entity->Id."</td>".
				 "<td>".$entity->TypeId."</td>".
				 "<td>".$entity->Name."</td>".
				 "<td>".$entity->Address."</td>".
				 "<td>".$entity->PostalCode."</td>".
				 "<td>".$entity->City."</td>".
				 "<td>".$entity->Site."</td></tr>";
	 	}
	 	echo '</table>';		
	}
}




if(isset($this->data['entit']) && !empty($this->data['entit']))
{
	if($this->data['entit'] == "null")
	{
		echo "<h3 align='center'>Aucune entité associé</h3>";
	}
	else
	{

		echo "<table class='table' id='lesEntites'><tr><th>Id Entité</th><th>Id Type</th><th>Nom</th><th>Adresse</th><th>Code Postal</th><th>Ville</th><th>Site</th></tr>";
	 	foreach($this->data['entit'] as $entity)
	 	{
	 		echo "<tr><td>".$entity->Id."</td>".
				 "<td>".$entity->TypeId."</td>".
				 "<td>".$entity->Name."</td>".
				 "<td>".$entity->Address."</td>".
				 "<td>".$entity->PostalCode."</td>".
				 "<td>".$entity->City."</td>".
				 "<td>".$entity->Site."</td></tr>";
	 	}
	 	echo '</table>';		
	}
}



// AFFICHAGE STATS




if(isset($this->data['nbClient']) && !empty($this->data['nbClient']))
{
	foreach($this->data['nbClient'] as $row=>$value)
			{
				echo("Nombre de clients : <b>".$value->nbClient.'</b><br>');
			}
}

if(isset($this->data['nbEntity']) && !empty($this->data['nbEntity']))
{
	foreach($this->data['nbEntity'] as $row=>$value)
	{
		echo("Nombre d'entités : <b>".$value->nbEntity.'</b><br>');
}
}
if(isset($this->data['nbContracts']) && !empty($this->data['nbContracts']))
{
	foreach($this->data['nbContracts'] as $row=>$value)
			{
				echo("Nombre de contrats : <b>".$value->nbContract.'</b><br><br>');
			}
}

?>

<?php
$table = array(array('Packs','nbContrat'));
if(isset($this->data['lesContrats']) && !empty($this->data['lesContrats']))
{
	foreach($this->data['lesContrats'] as $row=>$value)
	{
		$table[] = array((string)$value->Name,((int)$value->nbContracts));
	}
	$table = json_encode($table);

?>
	
	<script type="text/javascript" >
    	
    	google.load('visualization', '1', {'packages':['corechart']});
    	
    	google.setOnLoadCallback(drawChart);
    	function drawChart()
    	{
			var data = new google.visualization.arrayToDataTable(<?= $table ?>);
			var options = 
			{
				title: 'Nombre de contrats par packs',
				legend:{position:'none'	},
			};
			
			var chart = new google.visualization.ColumnChart(document.getElementById("divGraph"));
			chart.draw(data,options);
}

    </script>
	<?php
}

?>

<?php
$table = array();
if(isset($this->data['nbClientsByTypes']) && !empty($this->data['nbClientsByTypes']))
{
	foreach($this->data['nbClientsByTypes'] as $row=>$value)
	{
		$table[] = array((string)$value->typeName,((int)$value->nbClient));
			}
	$table = json_encode($table);

?>
	
	<script type="text/javascript" >
    	
    	google.load('visualization', '1', {'packages':['corechart']});
    	
    	google.setOnLoadCallback(drawChart);
    	function drawChart()
    	{
			var data = new google.visualization.DataTable();
			data.addColumn('string','typeName');
			data.addColumn('number','nbClient');
			data.addRows(<?= $table ?>);
			var options = 
			{
				title: 'Pourcentage de clients par types',
				legend:{position:'none'	},
			};
			
			var chart = new google.visualization.PieChart(document.getElementById("divGraph2"));
			chart.draw(data,options);
}

    </script>
	<?php
}
?>


<div id="divGraph"></div>

<div id="divGraph2"></div>

		 	
  <div id="divData">

  </div>
<!--------------------------------------------------------------------------> 

          

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->