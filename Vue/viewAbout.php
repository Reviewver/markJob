<?php 
$titre = 'EnvoieCV';
$subtitle = 'A propos';
?>
<?php ob_start(); ?>
<div class="container">
<?php include("info/info.php"); ?>
</div>
<?php $contenu = ob_get_clean(); ?>
<?php require 'gabaris.php'; ?>
