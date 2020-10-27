<?php
include "model.php";
if(suppression_company($_POST['id'], $connect_mysql))
{
     header('Location: liste_demande.php');
}
?>
