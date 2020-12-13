<?php
	 include("connect.php");

 	extract($_REQUEST);
 	if(empty($_SESSION['user']))
	{
 		header("location:../user/index.php");
	}
 	if(empty($_SESSION['itemid']))
		$_SESSION['itemid']=$id;
	if (isset($btnsubmit)) {

		$uid=$_SESSION['uid'];
		$itemid=$_SESSION['itemid'];
		mysqli_query($con,"insert into auction_amount(sid,uid,amount) values($itemid,$uid,$txtamt)") or die(mysqli_error($con));
		$_SESSION['maxprice']=$txtamt;	
		$result=mysqli_query($con,"select email from user_m where uid=$uid")or die(mysqli_error($con));
		while ($row=mysqli_fetch_array($result)) 
		{
				echo "$row[3]";
		
		}

		header("location:detail.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Action Your Antique</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style>
ul {
  list-style-type: none;
 background-color: #36304a;
  padding: 0;
  padding-right: 5%; 
  overflow: hidden;
  font-size: 16px;

}

li {
  float: right;
}

li a {
  display: block;
  color: #f39406;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
</style> 
</head>
 <body>
	 <ul>
      <li><a href="logout.php" >Logout</a></li>
      <li><a href="selling.php">Sell</a></li>
      <li><a href="outdate.php">Outdate Item</a></li>
      <li><a href="update.php">Edit Item</a></li>
      <li><a href="userauction.php">Your Auction</a></li>
      <li><a class="active" href="participate.php">You've Participate</a></li>
</ul>	
<form method="post">
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<center><table data-vertable="ver1" style="width:60%;">
						<thead>
						</thead>
						<tbody>

								<?php
									
								$result1=mysqli_query($con,"select max(amount) from auction_amount where sid=".$_SESSION['itemid']) or die(mysqli_error($con));

								$row1=mysqli_fetch_array($result1);
								$result=mysqli_query($con,"select * from selling where sid=".$_SESSION['itemid']) or die(mysqli_error($con));
								while($row=mysqli_fetch_array($result)) 
								{						
									$sdate=date('d-m-Y',strtotime($row[8]));
									$edate=date('d-m-Y',strtotime($row[9]));									
									echo "<tr class='row100'>";
									echo "<td class=' column1' data-column='column1' align='center'colspan='2'><img src=$row[6] height=200px width=200px></td>";
									echo "</tr>";
									echo "<tr class='row100'>";
									echo "<td class='column100 column2' data-column='column2' align='center'>Product Name</td>";
									echo "<td class='column100 column3' data-column='column3' align='center'>$row[4]</td>";
									echo "</tr>";
									echo "<tr class='row100'>";
									echo "<td class='column100 column2' data-column='column2' align='center'>Base Price:</td> <td align='center'>$row[7]</td>";
									echo "</tr>";
									echo "<tr class='row100'>";
									echo "<td align='center'>Starting Date:</td><td align='center'>$sdate</td>";
									echo "</tr>";
									echo "<tr class='row100'>";
									echo "<td align='center'>Last Date:</td><td align='center'>$edate</td>";
									echo "</tr>";
									echo "<tr class='row100'>";
									echo "<td align='center'>Maximum Bided Price </td><td align='center'>$row1[0]</td>";
									echo "</tr>";
									echo "<tr class='row100'>";
									echo "<td align='center'>Enter your bidding price:</td><td align='center'><input type='txt'  name=txtamt align=' placeholder='Product Price' maxlength='30' size='20'</td>";
									echo "</tr>";
									echo "<tr class='row100'>";
									echo "<td colspan=2 align='center'><input type='submit' name='btnsubmit' value='Submit'> </td>";
									echo "</tr>";
									echo "<tr class='row100'>";
									echo @"<td colspan=4 align='center'>$msg </td>";
									echo "</tr>";
								}
								?>
							</tbody>
						</table>								
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</form>
</body>
</html>