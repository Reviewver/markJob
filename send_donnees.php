<?php

try {
include("connect.php");

$requete_create_table = 'CREATE TABLE demande_entreprise (nom VARCHAR(100), address VARCHAR(100), url VARCHAR(2083), date DATE, statut VARCHAR(100))';
$requete_send_data = 'INSERT INTO demande_entreprise VALUES (:company_name, :company_address, :company_url, NOW(), :statut) ';

$connect_mysql->query($requete_create_table);

if(!$prepare_requete = $connect_mysql->prepare($requete_send_data))
{
	echo "Erreur";
}
$name_company = htmlspecialchars($_POST['company_name']);
$url_company = htmlspecialchars($_POST['company_url']);
$address_company = htmlspecialchars($_POST['company_address']);
if(!$prepare_requete->execute(array(':company_name' => $name_company, ':company_address' => $address_company, ':company_url' => $url_company, ':statut' => "Candidature envoyée")))
{
	echo "Erreur";
}
else
{
	 header('Location: index.php');
}

} catch (PDOException $e) {
	print "Erreur" . $e->getMessage() . "<br/>";
	die();
}
?>