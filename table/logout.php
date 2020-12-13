<?php
	
		session_start();

		unset($_SESSION['user']);
		unset($_SESSION['itemid']);
		header("location:../user/index.php");

?>