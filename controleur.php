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

// Affichage de la page pour mettre à jour une demande
function displayUpdateCompany()
{
	include "viewUpdateDemande.php";
}

function saveUpdateCompany()
{
	include "model.php";
	insertMiseAJourEntreprise(
htmlspecialchars($_POST['id']),
htmlspecialchars($_POST['reponse']),
htmlspecialchars($_POST['statut']),
htmlspecialchars($_POST['date'])
);
}

function deleteCompany()
{
	include "model.php";
	if(suppression_company($_POST['id'], $connect_mysql))
	{
     		header('Location: index.php?action=demande');
	}
}

function createCompany()
{
	include "model.php";
	createDemandeCompany();
}
?>

