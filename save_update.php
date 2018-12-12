<?php 
try {
echo $_POST['id'];
echo $_POST['reponse'];
echo $_POST['statut'];

include("connect.php");
$requete = "INSERT INTO miseajour_entreprise VALUES (:id_lien, NOW(), :statut, :justification)";

if(!$prepare_requete = $connect_mysql->prepare($requete))
{
	echo "Erreur";
}

$id = htmlspecialchars($_POST['id']);
$reponse = htmlspecialchars($_POST['reponse']);
$statut = htmlspecialchars($_POST['statut']);



if(!$prepare_requete->execute(array(':id_lien' => $id, ':statut' => $statut, ':justification' => $reponse)))
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