<?php 
$mailTexte = $_POST['mail'];
$mailObjet = $_POST['objetmail'];

$mailFile = fopen("mail.txt", "w") or die("Unable to open file!");
fwrite($mailFile, $mailTexte);
fclose($mailFile);

$objetFile = fopen("objet_mail.txt", "w") or die("Unable to open file!");
fwrite($objetFile, $mailObjet);
fclose($objetFile);
?>
<script type='text/javascript'>
window.onload=function(){setTimeout(function(){history.back()},0);}
</script>