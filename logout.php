<?php 
	require_once 'core/init.php';
	session_destroy();
	echo "<script>
		location.href = 'index.php';
	</script>";

 ?>