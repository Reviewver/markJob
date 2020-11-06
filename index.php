<?php
include "Controleur/controleur.php";
include "demande.php";
if(isset($_GET['action'])) 
{
	if($_GET['action'] == "demande")
	{
		listeDemande();
	}
	else if($_GET['action'] == "entretient")
	{
		displayPenseBete();	
	}
	else if($_GET['action'] == "export")
	{
		displayExportDemand();	
	}
	else if($_GET['action'] == "exportcv")
	{
		exportListe();
	}
	else if($_GET['action'] == "import")
	{
		displayImportCV();
	}
	else if($_GET['action'] == "about")
	{
		displayAbout();
	}
	else if($_GET['action'] == "seechange")
	{
		displayResponseCompany();
	}
	else if($_GET['action'] == "updatecompany")
	{
		displayUpdateCompany();
	}
	else if($_GET['action'] == "saveupdate")
	{
		saveUpdateCompany();
	}
	else if($_GET['action'] == "delete")
	{
		deleteCompany($_POST['id']);
	}
	else if($_GET['action'] == "create_demande")
	{
		$demande = new Demande ($_POST['company_name'],$_POST['company_address'],	$_POST['company_url'],$_POST['company_phone'],$_POST['company_email'],$_POST['company_send']);
		
		createCompany($demande);
	}
	else if($_GET['action'] == "save_mail")
	{
		displaySaveMail();	
	}
	else if($_GET['action'] == "save_pensebete")
	{
		displaySavePenseBete();
	}
}
else
{
	demande();
}
?>
