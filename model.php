<?php
function getDemandesEntreprises()
{
	include("connect.php");
	$requete_display_data = 'SELECT * FROM `demande_entreprise`';
	$demandes = $connect_mysql->query($requete_display_data);
	return $demandes;
}

function getDemandesEntreprisesStatus($demandes)
{
	include("connect.php");
	$requete_display = 'SELECT * FROM miseajour_entreprise WHERE id_lien=?';
	$prep = $connect_mysql->prepare($requete_display);
	foreach ($demandes as $demande)
	{
		echo $demande["ID"];
		if(!$prep->bindParam(1, $demande["ID"], PDO::PARAM_INT))
		{
			echo "Problème du passage des paramètres à la requête";
		}
		
		if(!$prep->execute())
		{
			echo "Problème d'execution";
		}
		
		$demande["status"] = $prep->fetch(PDO::FETCH_ASSOC);
	}
	
	print_r($demandes);
	
	return $demandes;
}

function saveMail($mailTexte, $mailObjet)
{
	$mailFile = fopen("mail.txt", "w") or die("Unable to open file!");
	fwrite($mailFile, $mailTexte);
	fclose($mailFile);

	$objetFile = fopen("objet_mail.txt", "w") or die("Unable to open file!");
	fwrite($objetFile, $mailObjet);
	fclose($objetFile);
}
?>	
