<html>
	<head>
		<meta charset="utf-8">
		<title>Affichage des demandes en cours</title>
		<link rel="stylesheet" type="text/css" href="bootstrap-4.1.3-dist/css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="index.css"/>
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
				<th>Téléphone</th>
				<th>E-mail</th>
				<th>Site web de l'entreprise</th>
				<th>Envoie par</th>
				<th>Date</th>
				<th>Statut</th>
				<th>Justification</th>
				<th></th>
				</tr>
			</thead>
			<tbody>
			<?php
			include("statut.php");
						
			foreach  ($demandes as $demande) {
				print "<tr>";
				print "<td>" . $demande['nom'] . "</td>";
				print "<td>" . $demande['address'] . "</td>";
				print "<td>" . $demande['phone'] . "</td>";
				print "<td>" . $demande['email'] . "</td>";
				?><td><a href="<?php echo $demande['url']?>"><?php echo $row['url']?></a></td><?php
				print "<td>" . $demande['send'] . "</td>";
				print "<td>" . date('d/m/Y',strtotime($demande['date'])) . "</td>";
							?>
				<td><?php display_statut($statut['statut']); ?></td><?php
				print "<td>";
				print $statut['justification'];
				print "</td>";
				?><td>
				<form action="update.php" method="POST"><input type="hidden" name="id" value="<?php echo "".$demande['ID']."" ?>"></input><input type="hidden" name="name" value="<?php echo "".$demande['nom']."" ?>"></input><button class="btn btn-primary">Mise à jour</button></form>
				<form action="update_list_company.php" method="POST"><input type="hidden" name="id" value="<?php echo "".$demande['ID']."" ?>"></input><input type="hidden" name="name" value="<?php echo "".$demande['nom']."" ?>"></input><button class="btn btn-primary">Voir les changement</button></form>
				<form action="delete_company.php" method="POST"><input type="hidden" name="id" value="<?php echo "".$demande['ID']."" ?>"></input><button class="btn btn-danger">Supprimer</button></form>
				</td><?php
				print "</tr>";
			}
			?>
			</tbody>
				</table>

		</div>
	</body>
