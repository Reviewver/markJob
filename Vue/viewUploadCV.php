<?php 
$titre = 'EnvoieCV';
$subtitle = 'Importer un CV';
?>
<?php ob_start(); ?>
<div class="container">
<form class="row" action="saveCV.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="MAX_FILE_SIZE" value="100000">
<input class="btn" name="cv" type="file">
<input class="btn" type="submit">
</form>
</div>
<?php $contenu = ob_get_clean(); ?>
<?php require 'gabaris.php'; ?>
