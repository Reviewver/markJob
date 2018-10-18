<html>
	<head>
		<title>Affichage des demandes en cours</title>
		<link rel="stylesheet" type="text/css" href="bootstrap-4.1.3-dist/css/bootstrap.css"/>
	</head>
	<body>
		<div class="container">

			<header>
				<h1>Affichage des demandes en cours</h1>
				<?php include("menu.php"); ?>
			</header>
			<table class="table table-striped">
			<thead>
				<tr>
				<th>Nom de l'entreprise</th>
				<th>Adresse de l'entreprise</th>
				<th>Site web de l'entreprise</th>
				<th>Date</th>
				<th>Statut</th>
				</tr>
			</thead>
			<tbody>
			<?php
			include("connect.php");
			$requete_display_data = 'SELECT * FROM `demande_entreprise`';
			
			foreach  ($connect_mysql->query($requete_display_data) as $row) {
				print "<tr>";
				print "<td>" . $row['nom'] . "</td>";
				print "<td>" . $row['address'] . "</td>";
				?><td><a href="<?php echo $row['url']?>"><?php echo $row['url']?></a></td><?php
				print "<td>" . date('d/m/Y',strtotime($row['date'])) . "</td>";
				print "<td>" . $row['statut'] . "</td>";
				print "</tr>";
			}
			?>
			</tbody>
				</table>

		</div>
	</body>
</html>