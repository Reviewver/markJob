<html>
	<head>
		<meta charset="utf-8">
		<title>Pense bête téléphone</title>
		<link rel="stylesheet" type="text/css" href="bootstrap-4.1.3-dist/css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="index.css"/>
	</head>
    <body class="container">
            <header>
				<h1>Pense bête téléphone</h1>
				<?php include("menu.php"); ?>
			</header>
            <form action="save_pensebete.php" method="post"/>
			<div class="form-group">
			<label>Contenue du pense bête : </label>
			<textarea rows="10" class="form-control"  name="pensebete"><?php include("pensebete.txt"); ?></textarea>
			</div>
			<button type="submit" class="btn btn-primary" type="button">Sauvegarder</button>
			</form>
    </body>
</html>