<?php 
	include("connect.php");

 	@session_start();
		
		mysqli_query($con,"insert into auction_amount(sid,uid,amount) values($itemid,$uid,$txtamt)");

		header("location:detail.php");
?>