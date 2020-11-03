<?php 
$titre = 'EnvoieCV';
$subtitle = "Affichage des réponses de l'entreprise";
?>
<?php ob_start();
include("statut.php");
				?><div class="container">
				<table class="table table-striped">
				<thead>
				<tr>
				<th>date</th>
				<th>justification</th>
				<th>statut</th>
				</tr>
				</thead>
				<tbody><?php
				foreach($tabl as $pass)
				{
				?><tr><td><?php echo date('d/m/Y',strtotime($pass['date'])) ?></td><td><?php echo $pass['justification']; ?></td>
				<td><?php display_statut($pass['statut']); ?></td>
				</tr><?php 
				}
				?></tbody></table>
				<a class="btn btn-primary" href="index.php?action=demande">Retour</a>
				</div>
<?php $contenu = ob_get_clean(); ?>
<?php require 'gabaris.php'; ?>
