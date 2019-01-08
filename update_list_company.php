<html>
	<head>
		<meta charset="utf-8">
		<title>Affichage des demandes en cours</title>
		<link rel="stylesheet" type="text/css" href="bootstrap-4.1.3-dist/css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="index.css"/>
	</head>
	<body>
<?php
include("connect.php");
include("statut.php");
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
				?><div class="container">
				<header>
				<h1>Affichage des réponses de l'entreprise <?php echo $_POST["name"]; ?></h1>
				<?php include("menu.php"); ?>
			</header>
				<table class="table table-striped">
				<thead>
				<tr>
				<th>date</th>
				<th>justification</th>
				<th>statut</th>
				</tr>
				</thead>
				<tbody><?php
				foreach($tabl as $pass)
				{
				?><tr><td><?php echo date('d/m/Y',strtotime($pass['date'])) ?></td><td><?php echo $pass['justification']; ?></td>
				<td><?php display_statut($pass['statut']); ?></td>
				</tr><?php 
				}
				?></tbody></table>
				<a class="btn btn-primary" href="liste_demande.php">Retour</a>
				</div>
					</body>
</html>