<!DOCTYPE html>
<html lang="en">
<head>
	<title>Auction Your Antique</title>
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
table{
	 box-shadow: 0 0 10px black,0 0 10px black,0 5px 1px white;
}
body{
 
  width: 100%;
  height:auto;
  overflow-x: hidden;
  background-image: url("slide3.jpg");
  background-size:cover;
  background-attachment: fixed;
  background-repeat: no-repeat;

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
<form method=post action="dataentry.php" enctype="multipart/form-data">
	 <div class="limiter">
    <div class="container-table100">
      <div class="wrap-table100">
        <div class="table100 ver1 m-b-110">
          <center><table data-vertable="ver1" style="width:60%;">
            <thead>    
                <tr class="row100 head">
                  <th class="column100 column1" colspan=5 align="center" data-column="column1"><CENTER><h3>Edit Your Items</h3></CENTER></th>
              						<tr class="row100 head">
              				  <th class="column100 column3" data-column="column3">Product Name</th>
              				  <th class="column100 column4" data-column="column4">Product Detail</th>
                			  <th class="column100 column2" data-column="column2">Product Image</th>
                			  <th class="column100 column5" data-column="column5">Product Amount</th>
                			  <th class="column100 column5" data-column="column5">Product Edit</th>
                			  
              				</tr>
							
						</thead>
						<tbody>

							<?php
								include("connect.php");
								$id=$_SESSION['uid'];
								if(empty($_SESSION['user']))
										header("location:../user/index.php");
									
									
								$result=mysqli_query($con,"select * from selling where uid='$id' ")  or die(mysqli_error($con));

							?>
							<?php 
              				  while($row=mysqli_fetch_array($result))
                			{
                						$od=date("d",strtotime($row[9]));
										$om=date("m",strtotime($row[9]));
										$oy=date("Y",strtotime($row[9]));
									
										$nd=date("d"); 
										$nm=date("m"); 
										$ny=date("Y");
										if($row[1]>=1)
                					{
                				
                  					echo "<tr class='row100'>";
                  					echo "<td class='column100 column1' data-column='column1'>$row[4]</td>";
                  					echo "<td class='column100 column2' data-column='column1'>$row[5]</td>";
				                  
                				  	echo "<td class='column100 column3' data-column='column1'><img src='$row[6]' height=150px width=200px></td>";
                  					echo "<td class='column100 column4' data-column='olumn1'>$row[7]</td>";
                  					echo "<td class='column100 column3' data-column='column3'><a href=edit.php?id=$row[0]> Edit </a></td>";
					                echo "<tr>";
					            }
               				 }
                ?>

						</tbody>
					</table></center>
				</div>
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