function ShowAddClient()
{
	$.ajax(
	{
		type:"POST",
		url:"http://localhost/GestionClients/GestionClients_Erwin/index.php/CtrlClients/showAddClient",
		success:function(data)
		{
			$('#divData').empty();
			$('#divData').append(data);
		},
		error:function()
		{
			alert("erreur")
		}
	});
}

function GetTypes(){
	$.ajax(
	{
		type:"POST",
		url:"http://localhost/GestionClients/GestionClients_Erwin/index.php/CtrlTypes/getTypes",
		success:function(data)
		{
			$('#divData').empty();
			$('#divData').append("<table class='table' id='lesTypes'> <tr> <th>Id type</th> <th>Libelle</th> <th>Archiver ?</th> </tr> </table>")
			var types = $.parseJSON(data);
			for(var type in types){
				$('#lesTypes').append("<tr><td>" + types[type].idType + "</td>" + 
										"<td>" + types[type].libelleType + "</td>" +
										"<td><input type='button' value='Archiver' onclick='ArchiveType(this.id)'></td>" + 
										"</tr>");
				}
		},
		error:function()
		{
			alert("erreur")
		}
	});
}

function GetPacks(){
	$.ajax(
	{
		type:"POST",
		url:"http://localhost/GestionClients/GestionClients_Erwin/index.php/CtrlPacks/getPacks",
		success:function(data)
		{
			$('#divData').empty();
			$('#divData').append("<table class='table' id='lesPacks'> <tr> <th>Id</th> <th>Libelle</th> <th>Dispositif</th> <th>Bénéfice</th> <th>Durée</th> <th>Prix</th> <th>Détails</th> </tr> </table>")
			var packs = $.parseJSON(data);
			for(var pack in packs){
				$('#lesPacks').append("<tr><td>" + packs[pack].idContract + "</td>" + 
										"<td>" + packs[pack].libelleContract + "</td>" +
										"<td>" + packs[pack].deviceContract + "</td>" +
										"<td>" + packs[pack].profitContract + "</td>" +
										"<td>" + packs[pack].TimeContract + "</td>" +
										"<td>" + packs[pack].priceContract + "</td> " +
										"<td><input id='"+packs[pack].idContract+"' type='button' value='Détails' onclick='ShowPacksDetails(this.id)'></td></tr>");
				}
		},
		error:function()
		{
			alert("erreur")
		}
	});
}

function ShowPacksDetails(id){
	$.ajax(
	{
		type:"POST",
		url:"http://localhost/GestionClients/GestionClients_Erwin/index.php/CtrlPacks/showPacksDetails",
		data:"PackId=" + id,
		success:function(data)
		{
			$('#divData').empty();
			$('#divData').append("<br><p><b>Bénéficiaires :<b></p><table class='table' id='tableClients'><tr><th>idClients</th>" + 
										"<th>Nom</th>" +
										"<th>Prénom</th>" + 
										"<th>Téléphone</th>" +
										"<th>Mail</th>" +
										"<th>Adresse</th>" +
									"</tr></table>");
			var clients = $.parseJSON(data);
			
			for(i = 0; i < clients.length; i++){
				//alert(clients[i].idClient);
				if(clients[i].idContract == id){
				$('#tableClients').append("<tr>" +
											"<td>" + clients[i].idClient + "</td>" +
											"<td>" + clients[i].nameClient + "</td>" +
											"<td>" + clients[i].firstNameClient + "</td>" +
											"<td>" + clients[i].phoneClient + "</td>" +
											"<td>" + clients[i].emailClient + "</td>" +
											"<td>" + clients[i].addressClient + "</td>" +
											"</tr>");
											}
			}
		},
		error:function()
		{
			alert("erreur")
		}
	});
}	
/*
function GetClients()
{
	$.ajax(
	{
		type:"POST",
		url:"http://localhost/GestionClients/GestionClients_Erwin/index.php/CtrlClients/getClients",
		success:function(data){
			$('#divData').empty();
			$('#divData').append("<table class='table' id='lesClients'><tr><th>Id client</th>" + 
									"<th>Nom</th>" +
									"<th>Prenom</th>" + 
									"<th>Telephone</th>" +
									"<th>Email</th>" +
									"<th>Adresse</th>" +
									"<th>Plus d'infos ?</th>" + 
									"</tr></table>");
			var clients = $.parseJSON(data);
			
			for(i = 0; i < clients.length; i++){
				$('#lesClients').append("<tr><td>" + clients[i].idClient + "</td>" + 
										"<td>" + clients[i].nameClient + "</td>" +
										"<td>" + clients[i].firstNameClient + "</td>" + 
										"<td>" + clients[i].phoneClient + "</td>" +
										"<td>" + clients[i].emailClient + "</td>" +
										"<td>" + clients[i].addressClient + "</td>" +
										"<td><input id='" + clients[i].idClient + "' type='button' value='Details' onclick='ShowClientDetails(this.id)'></td></tr>");
				}
		},
		error:function()
		{
			alert("erreur")
		}
	});
}
*/
function AddClient(){
	var firstName = $('#txtFirstName').val();
	var name = $('#txtName').val();
	var phoneNumber = $('#txtPhone').val();
	var email = $('#txtEmail').val();
	var address = $('#txtAddress').val();
	
	$.ajax(
	{
		type:"post",
		url:"http://localhost/GestionClients/GestionClients_Erwin/index.php/CtrlClients/addClient",
		data:"firstName=" + firstName + "&name=" + name + "&phoneNumber=" + phoneNumber + "&email=" + email + "&address=" + address,
		success:function(data){
			if(firstName == "" | name == "" | phoneNumber == "" | email =="" | address == "")
			{
				alert ("Champs manquant");
			}
			else
			{
			alert('Client ajouté');
		}
			
		}
	});
}

function ShowClientDetails(id){
	$.ajax(
	{
		type:"POST",
		url:"http://localhost/GestionClients/GestionClients_Erwin/index.php/CtrlClients/showClientDetails",
		data:"clientId=" + id,
		success:function(data)
		{
			$('#divData').empty();
			$('#divData').append("<table class='table' id='tableEntities'><tr><th>Id entité</th>" + 
									"<th>Nom</th>" +
									"<th>Ouverture</th>" + 
									"<th>Fermeture</th>" +
									"<th>Id type</th>" +
									"</tr></table>");
			var entities = $.parseJSON(data);
			for(i = 0; i < entities.length; i++){
				if(entities[i].idClient == id){
				$('#tableEntities').append("<tr>" +
											"<td>" + entities[i].idEntity + "</td>" +
											"<td>" + entities[i].libelleEntity + "</td>" +
											"<td>" + entities[i].openingTime + "</td>" +
											"<td>" + entities[i].closingTime + "</td>" +
											"<td>" + entities[i].idType + "</td>" +
											"</tr>");
											}
			}
		},
		error:function()
		{
			alert("erreur")
		}
	});
}	

	
function GetEntity()
{
	$.ajax(
	{
		type:"POST",
		url:"http://localhost/GestionClients/GestionClients_Erwin/index.php/CtrlEntity/getEntity",
		success:function(data){
			$('#divData').empty();
			$('#divData').append("<table class='table' id='lesEntites'><tr><th>Id client</th>" + 
									"<th>Id</th>" +
									"<th>Nom</th>" + 
									"<th>Ouverture</th>" +
									"<th>Fermeture</th>" +
									"<th>Ville</th>" +
									"<th>Code Postal</th>" +
									"<th>Adresse</th>" + 
									"</tr></table>");
			var entitys = $.parseJSON(data);
			for(var entity in entitys){
				$('#lesEntites').append("<tr><td>" + entitys[entity].idEntity + "</td>" + 
										"<td>" + entitys[entity].libelleEntity + "</td>" +
										"<td>" + entitys[entity].openingTime + "</td>" + 
										"<td>" + entitys[entity].closingTime + "</td>" +
										"<td>" + entitys[entity].cityEntity + "</td>" +
										"<td>" + entitys[entity].postalCodeEntity + "</td>" +
										"<td>" + entitys[entity].addressEntity + "</td>" +
										"<td><input id='" + entitys[entity].idEntity + "' type='button' value='Details' onclick=''></td></tr>");
			}
		},
		error:function()
		{
			alert("erreur")
		}
	});
}

function GetStats()
{
	$.ajax(
	{
		type:"POST",
		url:"http://localhost/GestionClients/GestionClients_Erwin/index.php/CtrlStats/getEntity",
		success:function(data){
			$('#divData').empty();
			$('#divData').append("<table class='table' id='lesEntites'><tr><th>Id client</th>" + 
									"<th>Id</th>" +
									"<th>Nom</th>" + 
									"<th>Ouverture</th>" +
									"<th>Fermeture</th>" +
									"<th>Ville</th>" +
									"<th>Code Postal</th>" +
									"<th>Adresse</th>" + 
									"</tr></table>");
			var entitys = $.parseJSON(data);
			for(var entity in entitys){
				$('#lesEntites').append("<tr><td>" + entitys[entity].idEntity + "</td>" + 
										"<td>" + entitys[entity].libelleEntity + "</td>" +
										"<td>" + entitys[entity].openingTime + "</td>" + 
										"<td>" + entitys[entity].closingTime + "</td>" +
										"<td>" + entitys[entity].cityEntity + "</td>" +
										"<td>" + entitys[entity].postalCodeEntity + "</td>" +
										"<td>" + entitys[entity].addressEntity + "</td>" +
										"<td><input id='" + entitys[entity].idEntity + "' type='button' value='Details' onclick=''></td></tr>");
			}
		},
		error:function()
		{
			alert("erreur")
		}
	});
}