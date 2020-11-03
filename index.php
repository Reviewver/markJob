<?php
include "Controleur/controleur.php";
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
		deleteCompany();
	}
	else if($_GET['action'] == "create_demande")
	{
		createCompany();
	}
}
else
{
	demande();
}
?>
