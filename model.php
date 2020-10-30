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

function savePenseBete($penseBeteTexte)
{
	$File = fopen("pensebete.txt", "w") or die("Unable to open file!");
	fwrite($File, $penseBeteTexte);
	fclose($File);
}

function suppression_company($ID,$connect)
{
        include("connect.php");
        
        $requete_delete_table = 'DELETE FROM `demande_entreprise` WHERE ID=?';
        
        if(!$prepare_requete = $connect->prepare($requete_delete_table))
        {
	        return 0;
        }   
        if(!$prepare_requete->bindParam(1, $ID))
        {
            return 0;
        }

        if(!$prepare_requete->execute())
        {
           return 0;
        }
        return 1;
        
}

function insertMiseAJourEntreprise($id, $response, $statut, $date)
{ 
	try {
	include("connect.php");
	$requete = "INSERT INTO miseajour_entreprise VALUES (:id_lien, :date_update, :statut, :justification)";

	if(!$prepare_requete = $connect_mysql->prepare($requete))
	{
		echo "Erreur";
	}

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
}

function export_csv($data, $filename)
{
	header("Content-Type: text/plain");
	header("Content-disposition: attachment; filename=" . $filename . ".csv");

	$out = fopen('PHP://output', 'w');
	foreach($data as &$value)
	{
		fputcsv($out, $value);
	}
	fclose($out);
}

function getResponseCompany()
{
	include("connect.php");
	$requete_display = 'SELECT * FROM miseajour_entreprise WHERE id_lien=?';
	$prep = $connect_mysql->prepare($requete_display);
	if(!$prep->bindParam(1, $_POST['id'], PDO::PARAM_INT))
	{
		echo "Problème du passage des paramètres à la requête";
	}

	if(!$prep->execute())
	{
		echo "Problème d'execution";
	}

	$tabl = $prep->fetchAll(PDO::FETCH_ASSOC);

	return $tabl;
}

function getExport($nom, $adresse, $phone, $email, $url, $send, $date, $statut)
{
			include("connect.php");
			$sql = 'SELECT * FROM `demande_entreprise`';
			$req = $connect_mysql->prepare($sql);
			$req->execute();
					if(isset($nom)&&isset($adresse)&&isset($phone)&&isset($email)&&isset($url)&&isset($send)&&isset($date)&&isset($statut))
			{
			$tableau = $req->fetchAll(PDO::FETCH_ASSOC);
			}
			else
			{
			$tableau = [];
			$colonne = [];
			while ($row = $req->fetch())
			{	
					if(isset($nom))
					{
					$colonne[] = $row["nom"];			       
					}
					if(isset($adresse))
					{
					$colonne[] = $row["address"];
					}
					if(isset($phone))
					{
					$colonne[] = $row["phone"];
					}
					if(isset($email))
					{
					$colonne[] = $row["email"];
					}
					if(isset($url))
					{
					$colonne[] = $row["url"];
					}
					if(isset($send))
					{
					$colonne[] = $row["send"];
					}
					if(isset($date))
					{
					$colonne[] = $row["date"];
					}
					if(isset($statut))
					{
					$colonne[] = $row["statut"];
					}
					$tableau[] = $colonne;
				       $colonne = "";

    			}
			$req->closeCursor();
			
			return $tableau;
	}
	}
?>	
