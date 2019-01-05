<?php

try {
include("connect.php");

$requete_create_table = 'CREATE TABLE demande_entreprise (nom VARCHAR(100), address VARCHAR(100), phone VARCHAR(100), email VARCHAR(100) ,url VARCHAR(2083), send VARCHAR(100), date DATE, statut VARCHAR(100))';
$requete_send_data = 'INSERT INTO demande_entreprise VALUES (:company_name, :company_address, :company_phone, :email, :company_url, :send, NOW(), :statut) ';

$connect_mysql->query($requete_create_table);

if(!$prepare_requete = $connect_mysql->prepare($requete_send_data))
{
	echo "\nPDO::errorInfo():\n";
   print_r($prepare_requete->errorInfo());
}
$name_company = htmlspecialchars($_POST['company_name']);
$url_company = htmlspecialchars($_POST['company_url']);
$address_company = htmlspecialchars($_POST['company_address']);
$company_phone = htmlspecialchars($_POST['company_phone']);
$email = htmlspecialchars($_POST['company_email']);
$send = htmlspecialchars($_POST['company_send']);
if(!$prepare_requete->execute(array(':company_name' => $name_company, ':company_address' => $address_company, ':company_phone' => $company_phone, ':email' => $email, ':company_url' => $url_company, ':send' => $send, ':statut' => "En attente de réponse")))
{
	echo "\nPDO::errorInfo():\n";
   print_r($prepare_requete->errorInfo());
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