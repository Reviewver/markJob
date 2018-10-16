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
			
			<?php
			include("connect.php");
			$requete_display_data = 'SELECT * FROM `demande_entreprise`';
			
			foreach  ($connect_mysql->query($requete_display_data) as $row) {
				print "<p>" . $row['nom'] . "</p>";
			}
			?>

		</div>
	</body>
</html>