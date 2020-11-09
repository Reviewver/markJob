<?php

function getBdd()
{
try {
	$dsn = "mysql:host=db;dbname=base_envoie_cv";
	$user = "root";
	$pass = "root";
    $bdd = new PDO($dsn, $user, $pass);
    
    return $bdd;
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
}

function getDemandesEntreprises()
{
	$bdd = getBdd();
	$requete_display_data = 'SELECT * FROM `demande_entreprise`';
	$demandes = $bdd->query($requete_display_data);
	return $demandes;
}

function getDemandesEntreprisesStatus($demandes)
{
	$bdd = getBdd();
	$requete_display = 'SELECT * FROM miseajour_entreprise WHERE id_lien=?';
	$prep = $bdd->prepare($requete_display);
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
	$mailFile = fopen("mail.txt", "+w");
	fwrite($mailFile, $mailTexte);
	fclose($mailFile);

	$objetFile = fopen("objet_mail.txt", "+w");
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
        $bdd = getBdd();
        
        $requete_delete_table = 'DELETE FROM `demande_entreprise` WHERE ID=?';
        
        if(!$prepare_requete = $bdd->prepare($requete_delete_table))
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
	$bdd = getBdd();
	$requete = "INSERT INTO miseajour_entreprise VALUES (:id_lien, :date_update, :statut, :justification)";

	if(!$prepare_requete = $bdd->prepare($requete))
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
	$bdd = getBdd();
	$requete_display = 'SELECT * FROM miseajour_entreprise WHERE id_lien=?';
	$prep = $bdd->prepare($requete_display);
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

// Crée une demande pour une entreprise
function createDemandeCompany($demande)
{
	
	try {
$bdd = getBdd();

$requete_create_table = 'CREATE TABLE demande_entreprise (id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, nom VARCHAR(100), address VARCHAR(100), phone VARCHAR(100), email VARCHAR(100) ,url VARCHAR(2083), send VARCHAR(100), date DATE, statut VARCHAR(100))';
$requete_send_data = 'INSERT INTO demande_entreprise (nom, address, phone, email, url, send, date, statut) VALUES (:company_name, :company_address, :company_phone, :email, :company_url, :send, NOW(), :statut) ';

$bdd->query($requete_create_table);

if(!$prepare_requete = $bdd->prepare($requete_send_data))
{
	echo "\nPDO::errorInfo():\n";
   print_r($prepare_requete->errorInfo());
}

if(!$prepare_requete->execute(array(':company_name' => $demande->getCompanyName(), ':company_address' => $demande->getCompanyAdresse(), ':company_phone' => $demande->getCompanyPhone(), ':email' => $demande->getCompanyMail(), ':company_url' => $demande->getCompanyWebSite(), ':send' => $demande->getCompanyEnvoie(), ':statut' => $demande->getStatus())))
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

}

function getExport($nom, $adresse, $phone, $email, $url, $send, $date, $statut)
{
			$bdd = getBdd();
			$sql = 'SELECT * FROM `demande_entreprise`';
			$req = $bdd->prepare($sql);
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
