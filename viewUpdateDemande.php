<?php 
$titre = 'EnvoieCV';
$subtitle = 'Mise à jour de demande';
?>
<?php ob_start(); ?>
		<div class="container">
            <form class="row" action="index.php?action=saveupdate" method="post">
			<input type="hidden" name="id" value="<?php echo "".$_POST['id']."" ?>"></input>
			<div class="form-groupe col-sm-12">
			<label for="reponse">Réponse</label>
            <textarea class="col-sm-12" type="text" name="reponse" id="reponse"></textarea>
			</div>
			<div class="form-groupe col-sm-12">
			<label for="oui">Oui</label>
			<input name="statut" type="radio" value="2" id="oui">
			<label for="non">Non</label>
			<input name="statut" type="radio" value="1" id="non">
			</div>
			<div class="form-groupe col-sm-12">
			<label for="date">Date</label>
			<input name="date" id="date" value="<?php echo date("Y-m-d") ?>" type="date">
			</div>
			<button class="btn btn-primary" type="submit">Enregistrer</button>
            </form>
        </div>
<?php $contenu = ob_get_clean(); ?>
<?php require 'gabaris.php'; ?>
