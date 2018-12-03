<?php 
$Texte = $_POST['pensebete'];

$File = fopen("pensebete.txt", "w") or die("Unable to open file!");
fwrite($File, $Texte);
fclose($File);

?>
<script type='text/javascript'>
window.onload=function(){setTimeout(function(){history.back()},0);}
</script>