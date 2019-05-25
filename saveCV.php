<?php
include("api/cv.php");

error_reporting(E_ALL); 
$monCV = new CV();

$monCV->save($_FILES['cv']);

?>
