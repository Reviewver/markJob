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
?>

