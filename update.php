<html>
	<head>
		<meta charset="utf-8">
		<title>Enregistrement des demandes envoyées au entreprise</title>
		<link rel="stylesheet" type="text/css" href="bootstrap-4.1.3-dist/css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="index.css"/>
	</head>
    <body>
		<div class="container">
        <header>
				<h1>Mise à jour des demandes envoyées à l'entreprise <?php echo $_POST['name'] ?></h1>
				<?php include("menu.php"); ?>
			</header>
            <form class="row" action="save_update.php" method="post">
			<input type="hidden" name="id" value="<?php echo "".$_POST['id']."" ?>"></input>
			<div class="form-groupe col-sm-12">
			<label for="reponse">Réponse</label>
            <textarea class="col-sm-12" type="text" name="reponse" id="reponse"></textarea>
			</div>
			<div class="form-groupe col-sm-12">
			<label for="oui">Oui</label>
			<input name="statut" type="radio" value="1" id="oui">
			<label for="non">Non</label>
			<input name="statut" type="radio" value="0" id="non">
			</div>
			<button class="btn btn-primary" type="submit">Enregistrer</button>
            </form>
        </div>
	</body>
 </html>