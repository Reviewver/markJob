<?php
include "model.php"; 
saveMail($_POST['mail'], $_POST['objetmail']);
?>
<script type='text/javascript'>
window.onload=function(){setTimeout(function(){history.back()},0);}
</script>
