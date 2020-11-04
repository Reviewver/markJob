<?php
	include "gui/textbox.php";
	include "gui/textboxvalue.php";
	include "gui/button.php";
?> 
<?php 
$titre = 'EnvoieCV';
$subtitle = 'Affichage des demandes au entreprises';
?>
<?php ob_start(); ?>
<div class="container">
			<form action="index.php?action=create_demande" method="post"/>
				<?php 
				$textbox = new Gui\TextBox("Nom de l'entreprise", "company_name");
				$textbox->insert();
				
				$textbox1 = new Gui\TextBox("Adresse de l'entreprise", "company_address");
				$textbox1->insert();
				
				$textbox2 = new Gui\TextBox("Site web de l'entreprise", "company_url");
				$textbox2->insert();
				
				$textbox3 = new Gui\TextBox("Téléphone de l'entreprise", "company_phone");
				$textbox3->insert();
				
				$textbox4 = new Gui\TextBox("Mail de l'entreprise", "company_email");
				$textbox4->insert();
				?>
				<div class="form-group"/>
				<label for="envoie">Envoie : </label>
					<select name="company_send" id="envoie" class="form-control">
						<option value="E-mail">par e-mail</option>
						<option value="Courrier">par courrier</option>
						<option value="Site web">par site web</option>
					</select>
				</div>
				<?php
					$button = new Gui\Button("Copier l'adresse email", "copyEmail");		
					$button->insert();		
					$button1 = new Gui\Button("Copier l'objet de l'e-mail", "copyObjet");		
					$button1->insert();		
					$button2 = new Gui\Button("Copier l'e-mail", "copy");		
					$button2->insert();	
				?>
				<button type="submit" class="btn btn-primary">Enregistrer</button>
			</form>
			<form action="index.php?action=save_mail" method="post"/>
			
			<?php
			$textboxvalue = new Gui\TextBoxValue("Objet du mail", "objetmail", "objet_mail.txt");
			$textboxvalue->insert();
			$textboxvalue1 = new Gui\TextBoxValue("Contenue du mail", "contenuemail", "mail.txt");
			$textboxvalue1->insert();
			?>
			<button type="submit" class="btn btn-primary" type="button">Sauvegarder le mail</button>
			</form>
		</div>
		<script src="copy.js"></script>
<?php $contenu = ob_get_clean(); ?>
<?php require 'gabaris.php'; ?>
