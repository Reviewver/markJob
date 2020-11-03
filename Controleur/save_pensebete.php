<?php 
include "model.php";
savePenseBete($_POST['pensebete']);
?>
<script type='text/javascript'>
window.onload=function(){setTimeout(function(){history.back()},0);}
</script>
