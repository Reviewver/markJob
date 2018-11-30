<?php
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

			include("connect.php");
			$sql = 'SELECT * FROM `demande_entreprise`';
			$req = $connect_mysql->prepare($sql);
			$req->execute();
			if(isset($_POST["nom"])&&isset($_POST["adresse"])&&isset($_POST["phone"])&&isset($_POST["email"])&&isset($_POST["url"])&&isset($_POST["send"])&&isset($_POST["date"])&&isset($_POST["statut"]))
			{
			$tableau = $req->fetchAll(PDO::FETCH_ASSOC);
			}
			else
			{
			$tableau = [];
			$colonne = [];
			while ($row = $req->fetch())
			{	
					if(isset($_POST["nom"]))
					{
					$colonne[] = $row["nom"];			       
					}
					if(isset($_POST["adresse"]))
					{
					$colonne[] = $row["address"];
					}
					if(isset($_POST["phone"]))
					{
					$colonne[] = $row["phone"];
					}
					if(isset($_POST["email"]))
					{
					$colonne[] = $row["email"];
					}
					if(isset($_POST["url"]))
					{
					$colonne[] = $row["url"];
					}
					if(isset($_POST["send"]))
					{
					$colonne[] = $row["send"];
					}
					if(isset($_POST["date"]))
					{
					$colonne[] = $row["date"];
					}
					if(isset($_POST["statut"]))
					{
					$colonne[] = $row["statut"];
					}
					$tableau[] = $colonne;
				       $colonne = "";

    			}
}
			$req->closeCursor();
			export_csv($tableau,"entreprise");
?>