<?php
include "model.php";
insertMiseAJourEntreprise(
htmlspecialchars($_POST['id']),
htmlspecialchars($_POST['reponse']),
htmlspecialchars($_POST['statut']),
htmlspecialchars($_POST['date'])
);
?>
