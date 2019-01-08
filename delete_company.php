<?php
include("connect.php");

function suppression_company($ID,$connect)
{
        include("connect.php");
        
        $requete_delete_table = 'DELETE FROM `demande_entreprise` WHERE ID=?';
        
        if(!$prepare_requete = $connect->prepare($requete_delete_table))
        {
	        return 0;
        }   
        if(!$prepare_requete->bindParam(1, $ID))
        {
            return 0;
        }

        if(!$prepare_requete->execute())
        {
           return 0;
        }
        return 1;
        
}


if(suppression_company($_POST['id'], $connect_mysql))
{
     header('Location: liste_demande.php');
}
?>