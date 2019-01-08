<?php 
// Affiche l'icone de statut
function display_statut($statut)
{
?>
<img id="iconeStatut" src="<?php 
				if($statut == 0)
				{
					echo "img/wait.svg";
				}
				else if($statut == 1)
				{
					echo "img/error.png";
				}				
				else if($statut == 2)
				{
					echo "img/ok.svg";
				}
				
				?>"><?php
            } 
            ?>