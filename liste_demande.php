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
				</tr>
			</thead>
			<tbody>
			<?php
			include("connect.php");
			$requete_display_data = 'SELECT * FROM `demande_entreprise`';
			$requete_display = 'SELECT * FROM miseajour_entreprise WHERE id_lien=?';
			$prep = $connect_mysql->prepare($requete_display);
			
			foreach  ($connect_mysql->query($requete_display_data) as $row) {
				print "<tr>";
				print "<td>" . $row['nom'] . "</td>";
				print "<td>" . $row['address'] . "</td>";
				print "<td>" . $row['phone'] . "</td>";
				print "<td>" . $row['email'] . "</td>";
				?><td><a href="<?php echo $row['url']?>"><?php echo $row['url']?></a></td><?php
				print "<td>" . $row['send'] . "</td>";
				print "<td>" . date('d/m/Y',strtotime($row['date'])) . "</td>";
				print "<td>";
				if(!$prep->bindParam(1, $row['ID'], PDO::PARAM_INT))
				{
					echo "Problème du passage des paramètres à la requête";
				}
				if(!$prep->execute())
				{
					echo "Problème d'execution";
				}
				$tabl = $prep->fetchAll(PDO::FETCH_ASSOC);
				?><table><tbody><?php
				foreach($tabl as $pass)
				{
				?><tr><td><?php echo date('d/m/Y',strtotime($pass['date'])) ?></td><td><?php echo $pass['justification']; ?></td>
				<td><img id="iconeStatut" src="<?php 
				if($pass['statut'] == 0)
				{
					echo "img/error.png";
				}				
				else
				{
					echo "img/ok.svg";
				}
				
				?>"></td>
				</tr><?php 
				}
				?></tbody></table><?php
				print "</td>";
				?><td><form action="update.php" method="POST"><input type="hidden" name="id" value="<?php echo "".$row['ID']."" ?>"></input><input type="hidden" name="name" value="<?php echo "".$row['nom']."" ?>"></input><button class="btn btn-primary">Mise à jour</button></form></td><?php
				print "</tr>";
			}
			?>
			</tbody>
				</table>

		</div>
	</body>
</html>