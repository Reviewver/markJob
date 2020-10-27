<?php 
$titre = 'EnvoieCV';
$subtitle = 'Exporter les demandes';
?>
<?php ob_start(); ?>
<div class="container">
		<form method="post" action="save.php"/>
		<div id="colonne">
		<div class="form-check">
		<input id="nom" name="nom" value="nom" type="checkbox">
		<label for="nom">Nom de l'entreprise</label>
		</div>
		<div class="form-check">
		<input id="adresse" name="adresse" value="adresse" type="checkbox">
		<label for="adresse">Adresse de l'entreprise</label>
		</div>
		<div class="form-check">
		<input id="phone" type="checkbox" name="phone" value="phone">
		<label for="phone">Téléphone de l'entreprise</label>
		</div>
		<div class="form-check">
		<input id="email" type="checkbox" name="email" value="email">
		<label for="email">Email de l'entreprise</label>
		</div>
		<div class="form-check">
		<input id="url" type="checkbox" name="url" value="url">
		<label for="url">Site web de l'entreprise</label>
		</div>
		<div class="form-check">
		<input id="send" type="checkbox" name="send" value="send">
		<label for="send">Type d'envoie</label>
		</div>
		<div class="form-check">
		<input id="date" type="checkbox" name="date" value="date">
		<label for="date">Date d'envoie</label>
		</div>
		<div class="form-check">
		<input id="statut" type="checkbox" name="statut" value="statut">
		<label for="statut">Statut</label>
		</div>
		</div>
		<button type="button" class="btn btn-dark" onclick="selectAll(true)">Tout sélectionner</button>
		<button type="button" class="btn btn-dark" onclick="selectAll(false)">Ne rien sélectionner</button>
		<button class="btn btn-dark" id="export" type="submit">Exporter</button>
		</form>
		
</div>
<script type="text/javascript" src="select.js"></script>
<?php $contenu = ob_get_clean(); ?>
<?php require 'gabaris.php'; ?>
