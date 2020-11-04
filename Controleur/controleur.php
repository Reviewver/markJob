<?php
function displayAbout()
{
	include "Vue/viewAbout.php";
}

function displayImportCV()
{
	include "Vue/viewUploadCV.php";
}

function displayPenseBete()
{
	include "Vue/viewPenseBeteEntretien.php";
}

function listeDemande()
{
	include "Modele/model.php";
	$demandes = getDemandesEntreprises();
	include "Vue/viewListeDemande.php";
}

function displayExportDemand()
{
	include "Vue/viewExportsDemandes.php";
}

function demande()
{
	include "Vue/viewDemande.php";
}

function exportListe()
{
	include "Modele/model.php";

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
	include "Modele/model.php";
	$tabl =	getResponseCompany(); 
	include "Vue/viewDisplayResponseCompany.php";
}

// Affichage de la page pour mettre à jour une demande
function displayUpdateCompany()
{
	include "Vue/viewUpdateDemande.php";
}

// Sauvegarde mail
function displaySaveMail()
{
include "Modele/model.php"; 
saveMail($_POST['mail'], $_POST['objetmail']);
}

function displaySavePenseBete()
{
include "Modele/model.php";
savePenseBete($_POST['pensebete']);
}

function saveUpdateCompany()
{
	include "Modele/model.php";
	insertMiseAJourEntreprise(
htmlspecialchars($_POST['id']),
htmlspecialchars($_POST['reponse']),
htmlspecialchars($_POST['statut']),
htmlspecialchars($_POST['date'])
);
}

function deleteCompany()
{
	include "Modele/model.php";
	if(suppression_company($_POST['id'], $connect_mysql))
	{
     		header('Location: index.php?action=demande');
	}
}

function createCompany()
{
	include "Modele/model.php";
	createDemandeCompany();
}
?>

