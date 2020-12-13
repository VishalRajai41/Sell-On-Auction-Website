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
</head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}

li {
  float: right;
}

li a {
  display: block;
  color: #000000;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
</style>  	
<body>
	
<form method="post">
	 <ul>
      <li><a href="logout.php" >Logout</a></li>
      <li><a href="selling.php">Sell</a></li>
      <li><a href="outdate.php">Outdate Item</a></li>
      <li><a href="update.php">Edit Item</a></li>
      <li><a href="userauction.php">Your Auction</a></li>
      <li><a class="active" href="participate.php">You've Participate</a></li>
	 <div class="limiter">
    <div class="container-table100">
      <div class="wrap-table100">
        <div class="table100 ver1 m-b-110">
          <center><table data-vertable="ver1" style="width:60%;">
            <thead>    
                <tr class="row100 head">
                  <th class="column100 column1" colspan=5 align="center" data-column="column1"><CENTER><h3>Participate User's</h3></CENTER></th>

								<tr class="row100 head">

								<th class="column100 column2" data-column="column2">Participate Name</th>
								<th class="column100 column3" data-column="column3">City</th>
								<th class="column100 column4" data-column="column4">Phone No</th>
								<th class="column100 column5" data-column="column5">Amount</th>
								<th class="column100 column6" data-column="column6">Date</th>

								</tr>
						</thead>
						<tbody>

								<?php
								include("connect.php");
								$_SESSION['vid']=$itemid;	
								$vid=$_SESSION['vid'];
								if(empty($_SESSION['user']))
										header("location:../user/index.php");
								$result=mysqli_query($con,"select a.uname,a.city,a.phone,b.amount,b.date from user_m a,auction_amount b where b.uid=a.uid and sid=$vid order by b.amount desc" ) or die(mysqli_error($con));
								while($row=mysqli_fetch_array($result))
								{						

									/*$sdate=date('d-m-Y',strtotime($row[8]));
									$edate=date('d-m-Y',strtotime($row[9]));*/									
									echo "<tr class='row100'  head>";
									echo "<td class=' column1' data-column='column1' align='center'>$row[0]</td>";
									echo "<td class='column100 column2' data-column='column2'>$row[1]</td>";
									echo "<td class='column100 column3' data-column='column3'>$row[2]</td>";
									echo "<td class='column100 column4' data-column='column4'>$row[3]</td>";
									echo "<td class='column100 column5' data-column='column5'>$row[4]</td>";
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