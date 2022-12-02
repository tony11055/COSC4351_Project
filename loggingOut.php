<!-- General PHP file to initiate logging out -->

<?php
	setcookie("username","",time() - 3600);
	setcookie("password","",time() -3600);
?>
<script type="text/javascript">
    window.location="index.php"
</script>