<?php
include("model.php");
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
?>
