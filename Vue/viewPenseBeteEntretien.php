<?php 
$titre = 'EnvoieCV';
$subtitle = 'Entretien téléphonique';
?>
            <form action="save_pensebete.php" method="post"/>
			<div class="form-group">
			<label>Contenue du pense bête : </label>
			<textarea rows="10" class="form-control"  name="pensebete"><?php include("pensebete.txt"); ?></textarea>
			</div>
			<button type="submit" class="btn btn-primary" type="button">Sauvegarder</button>
			</form>
<?php $contenu = ob_get_clean(); ?>
<?php require 'gabaris.php'; ?>
