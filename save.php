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
			$tableau = $req->fetchAll(PDO::FETCH_ASSOC);
			$req->closeCursor();
			export_csv($tableau,"entreprise");
?>