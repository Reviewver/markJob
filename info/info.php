<?php
$filename = "info/info.json";
$json_source = file_get_contents($filename);
$obj = json_decode($json_source);
?>
<div class="about">
<h2>Informations</h2>
<h3>Versions</h3>
<?php echo $obj->title ?> - version <?php echo $obj->version ?>
<h3>Auteur</h3>
<?php echo $obj->author ?>
</div>
