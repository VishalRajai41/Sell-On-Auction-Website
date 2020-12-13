<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V03</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../table/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../table/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../table/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../table/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../table/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../table/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../table/css/util.css">
	<link rel="stylesheet" type="text/css" href="../table/css/main.css">
<!--===============================================================================================-->
<style>
body{
	width: 100%;
  height:auto;
  overflow-x: hidden;
  background-image: url("slide1_orignal.jpg");
  background-size:cover;
  background-attachment: fixed;
  background-repeat: no-repeat;}
ul {
  list-style-type: none;
 background-color: #36304a;
  padding: 0;
  padding-right: 5%; 
  overflow: hidden;
  font-size: 16px;

}
table{
	 box-shadow: 0 0 10px black,0 0 10px black,0 5px 1px white;
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
	 <div class="limiter">
    <div class="container-table100">
      <div class="wrap-table100">
        <div class="table100 ver1 m-b-110">
          <center><table data-vertable="ver1" style="width:60%;">
            <thead>    
                <tr class="row100 head">
                  <th class="column100 column1" colspan=5 align="center" data-column="column1"><CENTER><h3>Your Items For Auction</h3></CENTER></th>
              
								<tr class="row100 head">
								<th class="column100 column2" data-column="column2">Product Image</th>
								<th class="column100 column3" data-column="column3">Product Name</th>
								<th class="column100 column4" data-column="column4">Base Price</th>
								<th class="column100 column5" data-column="column5">Date</th>
								<th class="column100 column6" data-column="column6">Action</th>

								</tr>
						</thead>
						<tbody>
								<?php
									include("connect.php");
									extract($_REQUEST);

									$id=$_SESSION['uid'];
									if(empty($_SESSION['user']))
										header("location:../user/index.php");
									
									$result=mysqli_query($con,"select * from selling where uid=$id and status='N'") or die(mysql_error());
									while($row=mysqli_fetch_array($result))
									{

											echo "<tr class='row100'  head>";
											echo "<td class=' column1' data-column='column1' align='center'><img src='$row[6]' height=150px width=200px></td>";
											echo "<td class='column100 column2' data-column='column2'>$row[4]</td>";
											echo "<td class='column100 column3' data-column='column3'>$row[7]</td>";
											echo "<td class='column100 column3' data-column='column3'>$row[9]</td>";
											echo "<td class='column100 column3' data-column='column3'><a href=soldstatus.php?aid=$row[0]>Sold Out</td>";
											echo "<tr>";									
									}
								
							?>	

						</tbody>
					</table>
				</div>
				</div>
			</div>
		</div>
	</div>

<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<table data-vertable="ver1">
						<thead>
								<tr class="row100 head">
								<th class="column100 column1" colspan=4 align="center" data-column="column1"><h2>Your Sold Items </h2></th>
								</tr>
								<tr class="row100 head">
								<th class="column100 column2" data-column="column2">Product Image</th>
								<th class="column100 column3" data-column="column3">Product Name</th>
								<th class="column100 column4" data-column="column4">Base Price</th>
								<th class="column100 column5" data-column="column5">Date</th>
								

								</tr>
						</thead>
						<tbody>
								<?php
									/*include("connect.php");
									extract($_REQUEST);
									$id=$_SESSION['uid'];*/
									//$iid=$_SESSION['itemid'];
									$result=mysqli_query($con,"select * from selling where uid=$id and status='Y'") or die(mysql_error());
									while($row=mysqli_fetch_array($result))
									{

											echo "<tr class='row100'  head>";
											echo "<td class=' column1' data-column='column1' align='center'><img src='$row[6]' height=150px width=200px></td>";
											echo "<td class='column100 column2' data-column='column2'>$row[4]</td>";
											echo "<td class='column100 column3' data-column='column3'>$row[7]</td>";
											echo "<td class='column100 column3' data-column='column3'>$row[9]</td>";
											
											echo "<tr>";									
									}
								
							?>	

						</tbody>
					</table>
				</div>
				</div>
			</div>
		</div>
	</div>

	

<!--===============================================================================================-->	
	<script src="../table/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../table/vendor/bootstrap/js/popper.js"></script>
	<script src="../table/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../table/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../table/js/main.js"></script>

</body>
</html>