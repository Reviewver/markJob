<?php
function displayAbout()
{
	include "viewAbout.php";
}

function displayImportCV()
{
	include "viewUploadCV.php";
}

function displayPenseBete()
{
	include "viewPenseBeteEntretien.php";
}

function listeDemande()
{
	include "model.php";
	$demandes = getDemandesEntreprises();
	include "viewListeDemande.php";
}

function displayExportDemand()
{
	include "viewExportsDemandes.php";
}

function demande()
{
	include "viewDemande.php";
}

function exportListe()
{
	include "model.php";

	$tableau = getExport(
	$_POST["nom"], 
	$_POST["adresse"], 
	$_POST["phone"],
	$_POST["email"],
	$_POST["url"],
	$_POST["send"],
	$_POST["date"],
	$_POST["statut"]
	);

	export_csv($tableau,"entreprise");
}

// Affichage des réponse de l'entreprise
function displayResponseCompany()
{
	include "model.php";
	$tabl =	getResponseCompany(); 
	include "viewDisplayResponseCompany.php";
}
?>

