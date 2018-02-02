<?php
	
	if(!isset($_SESSION))
	{
		session_start();	
	}
	
	echo '<script>window.location="admin/login.php"</script>';
	echo 'Please enable Java script..';
	exit();
	
?>