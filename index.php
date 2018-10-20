<html>
	<head>
		<title>Enregistrement des demandes envoyées au entreprise</title>
		<link rel="stylesheet" type="text/css" href="bootstrap-4.1.3-dist/css/bootstrap.css"/>
	</head>
	<body>
		<div class="container">

			<header>
				<h1>Enregistrement des demandes envoyées au entreprise</h1>
				<?php include("menu.php"); ?>
			</header>

			<form action="send_donnees.php" method="post"/>
				<div class="form-group"/>
					<label for="company_name">Nom de l'entreprise : </label>
					<input name="company_name" class="form-control" id="company_name" type="text"/>
				</div>
				<div class="form-group"/>
					<label for="company_url">Site web de l'entreprise : </label>
					<input name="company_url" class="form-control" id="company_url" type="url"/>
				</div>
				<div class="form-group"/>
					<label for="company_address">Adresse de l'entreprise : </label>
					<input name="company_address" class="form-control" id="company_address"/>
				</div>
				<div class="form-group"/>
					<label for="company_phone">Téléphone de l'entreprise : </label>
					<input name="company_phone" class="form-control" id="company_phone" type="tel"/>
				</div>
				<div class="form-group"/>
					<label for="company_email">Mail de l'entreprise : </label>
					<input name="company_email" class="form-control" id="company_email" type="email"/>
				</div>
				<button type="submit" class="btn btn-primary">Enregistrer</button>
			</form>

		</div>
	</body>
</html>