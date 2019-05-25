<?php 

if(!defined("BOOTSTRAP_DIRECTORY"))
{
	define("BOOTSTRAP_DIRECTORY", "bootstrap-4.1.3-dist");
}
if(!defined("BOOTSTRAP_CSS"))
{
	define("BOOTSTRAP_CSS", BOOTSTRAP_DIRECTORY . "/css/bootstrap.css");
}
?>

<html>
<head>
<meta charset="utf-8">
<title>Importer un CV</title>
<link rel="stylesheet" type="text/css" href="<?php echo BOOTSTRAP_CSS; ?>"/>
</head>
<body>
<div class="container">
<header>
<h1>Charger un CV</h1>
</header>
<form class="row" action="saveCV.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="MAX_FILE_SIZE" value="100000">
<input class="btn" name="cv" type="file">
<input class="btn" type="submit">
</form>
</div>
</body>
</html>
