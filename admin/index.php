<?php
include("../connect.php");
if(isset($btnlogin))
{
	$result=mysqli_query($con,"select * from admin where username='$txtuname' and password='$txtpass'") or die(mysqli_error($con));
	
	if(mysqli_num_rows($result)>0)
	{
		$_SESSION['admin']=$txtuname;
		header("location:../table/home.php");
	}
	else
		$msg="Invalid Username or Password is entered..";
}
?>
<head>
<title> Admin Login </title>
<link rel="stylesheet" href="css/style.css">
<script  src="js/index.js"></script>
</head>


<body>
<div class="container">
	<section id="content">
<form method=post>
	<table align=center>
		<tr>
			<td>Name:</td>
			<td><input type="text" name=txtuname placeholder="Name" maxlength="50"></td>

		</tr>
		<tr>
			<td> Password :</td>
			<td> <input type=password name=txtpass placeholder="Password"> </td>
		</tr>
			<td colspan="2" align="center">
			<input type="submit" name="btnlogin" value="Log In">	

		</td>
		</tr>
		
		<?php  
			if(@$msg!="")
			echo @"<tr><td colspan=2 align=center><div class=button><font color=red> $msg </font></div></td></tr>"; 
		?>
	
</table> 
</form>
</section>
</div>
</body>