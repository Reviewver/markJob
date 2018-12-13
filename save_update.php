<?php 
try {
include("connect.php");
$requete = "INSERT INTO miseajour_entreprise VALUES (:id_lien, :date_update, :statut, :justification)";

if(!$prepare_requete = $connect_mysql->prepare($requete))
{
	echo "Erreur";
}

$id = htmlspecialchars($_POST['id']);
$reponse = htmlspecialchars($_POST['reponse']);
$statut = htmlspecialchars($_POST['statut']);
$date = htmlspecialchars($_POST['date']);



if(!$prepare_requete->execute(array(':id_lien' => $id, ':date_update'=> $date, ':statut' => $statut, ':justification' => $reponse)))
{
	echo "Erreur";
}
else
{
	 header('Location: liste_demande.php');
}

} catch (PDOException $e) {
	print "Erreur" . $e->getMessage() . "<br/>";
	die();
}
?>