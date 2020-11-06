<?php 
$titre = 'EnvoieCV';
$subtitle = 'Affichage des demandes au entreprises';
?>
<?php ob_start(); ?>
		<div class="container">
			<table class="table table-striped">
			<thead>
				<tr>
				<th>Nom de l'entreprise</th>
				<th>Adresse de l'entreprise</th>
				<th>Téléphone</th>
				<th>E-mail</th>
				<th>Site web de l'entreprise</th>
				<th>Envoie par</th>
				<th>Date</th>
				<th>Statut</th>
				<th>Justification</th>
				<th></th>
				</tr>
			</thead>
			<tbody>
			<?php
			include("statut.php");
						
			foreach  ($demandes as $demande) {
				print "<tr>";
				print "<td>" . $demande['nom'] . "</td>";
				print "<td>" . $demande['address'] . "</td>";
				print "<td>" . $demande['phone'] . "</td>";
				print "<td>" . $demande['email'] . "</td>";
				?><td><a href="<?php echo $demande['url']?>"><?php echo $demande['url']?></a></td><?php
				print "<td>" . $demande['send'] . "</td>";
				print "<td>" . date('d/m/Y',strtotime($demande['date'])) . "</td>";
							?>
				<td><?php display_statut($statut['statut']); ?></td><?php
				print "<td>";
				print $statut['justification'];
				print "</td>";
				?><td>
				<form action="index.php?action=updatecompany" method="POST"><input type="hidden" name="id" value="<?php echo "".$demande['ID']."" ?>"></input><input type="hidden" name="name" value="<?php echo "".$demande['nom']."" ?>"></input><button class="btn btn-primary">Mise à jour</button></form>
				<form action="index.php?action=seechange" method="POST"><input type="hidden" name="id" value="<?php echo "".$demande['ID']."" ?>"></input><input type="hidden" name="name" value="<?php echo "".$demande['nom']."" ?>"></input><button class="btn btn-primary">Voir les changement</button></form>
				<form action="index.php?action=delete" method="POST"><input type="hidden" name="id" value="<?php echo "".$demande['ID']."" ?>"></input><button class="btn btn-danger">Supprimer</button></form>
				</td><?php
				print "</tr>";
			}
			?>
			</tbody>
				</table>

		</div>
<?php $contenu = ob_get_clean(); ?>
<?php require 'gabaris.php'; ?>
