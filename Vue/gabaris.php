<html>
	<head>
		<meta charset="utf-8">
		<title><?= $titre ?> - <?= $subtitle ?></title>
		<link rel="stylesheet" type="text/css" href="bootstrap-4.1.3-dist/css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="index.css"/>
	</head>
	<body>
	<header>
	<h1><?= $subtitle ?></h1>
	<?php include("menu.php"); ?>
	</header>
	<?= $contenu ?>
	</body>
</html>
