<?php


include("connect.php");
	if(empty($_SESSION['user']))
		header("location:../user/index.php");
mysqli_query($con,"update selling set status='Y' where sid=$aid");
header("location:userauction.php");

?>