<html>
	<head>
		<title>Enregistrement des demandes envoyées au entreprise</title>
		<link rel="stylesheet" type="text/css" href="bootstrap-4.1.3-dist/css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="index.css"/>
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
					<label for="company_address">Adresse de l'entreprise : </label>
					<input name="company_address" class="form-control" id="company_address"/>
				</div>
				<div class="form-group"/>
					<label for="company_url">Site web de l'entreprise : </label>
					<input name="company_url" class="form-control" id="company_url" type="url"/>
				</div>
				<div class="form-group"/>
					<label for="company_phone">Téléphone de l'entreprise : </label>
					<input name="company_phone" class="form-control" id="company_phone" type="tel"/>
				</div>
				<div class="form-group"/>
					<label for="company_email">Mail de l'entreprise : </label>
					<input name="company_email" class="form-control" id="company_email" type="email"/>
				</div>
				<div class="form-group"/>
				<label for="envoie">Envoie : </label>
					<select name="company_send" id="envoie" class="form-control">
						<option value="E-mail">par e-mail</option>
						<option value="Courrier">par courrier</option>
						<option value="Site web">par site web</option>
					</select>
				</div>
				<button class="btn btn-primary" id="copyEmail" type="button">Copier l'adresse email</button>
				<button class="btn btn-primary" id="copyObjet" type="button">Copier l'objet de l'e-mail</button>
				<button class="btn btn-primary" id="copy" type="button">Copier l'e-mail</button>
				<button type="submit" class="btn btn-primary">Enregistrer</button>
			</form>
			
			<form action="save_mail.php" method="post"/>
			<div class="form-group">
			<label for="objet">Objet du mail : </label>
			<input class="form-control" id="objet" name="objetmail" value="<?php include("objet_mail.txt"); ?>"/>
			</div>
			<div class="form-group">
			<label for="to-copy">Contenue du mail : </label>
			<textarea rows="10" class="form-control" id="to-copy" name="mail"><?php include("mail.txt"); ?></textarea>
			</div>
			<button type="submit" class="btn btn-primary" type="button">Sauvegarder le mail</button>
			</form>
					<footer>
		Version 0.2-alpha
		</footer>
		</div>
		<script src="copy.js"></script>
	</body>
 </html>