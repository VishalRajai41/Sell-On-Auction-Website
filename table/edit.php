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
                  <th class="column100 column1" colspan=5 align="center" data-column="column1"><CENTER><h4>Edit Item</h4></CENTER></th>	
            </thead>
			<tbody>
							<?php

							
								include("connect.php");
								$_SESSION['upid']=$id;
								if(empty($_SESSION['user']))
										header("location:../user/index.php");
									
									$result=mysqli_query($con,"select * from selling where sid=".$_SESSION['upid'])or die(mysqli_error($con));
									$row=mysqli_fetch_array($result);
									$oldpath=$row[6];
									if(isset($txtupdate))
									{
										$path="Upload/".$_FILES['file1']['name'];
										if(!empty($oldpath))
											unlink($oldpath);
										move_uploaded_file($_FILES['file1']['tmp_name'],"Upload/".$_FILES['file1']['name']);
										@mysqli_query($con,"update selling set proname='$txtpname',details='$txtdetail',propic='$path',proprice='$txtproprice' where sid=".$_SESSION['upid']) or die(mysqli_error($con));
										$msg="Record Update Successfully";
									}

						

							?>
							<tr class="row100">
								<td class="column100 column5"  align="center" data-column="column5">Product Name</td>
								<td class="column100 column6" align="center" data-column="column6"><input type="text" name=txtpname placeholder="Product Name" maxlength="30" value="<?php echo $row[4];?>" size="20"></td>
							</tr>
							<tr class="row100">
								<td class="column100 column7" align="center" data-column="column7">Product Detail</td>
								<td class="column100 column8" align="center" data-column="column8"><textarea rows="4" cols="15" name="txtdetail"><?php echo $row[5];?></textarea></td>
							</tr>
							<tr class="row100">
								<td class="column100 column1" align="center" data-column="column1">Product Image</td>
								<td class="column100 column2" data-column="column2"  align="center" colspan="2" align="right"><?php echo "<img src='$row[6]' height=150px width=200px>" ;?><br><br><input type="file" name="file1"></td>
							</tr>
							<tr class="row100">
								<td class="column100 column3" data-column="column3" align="center">Product Price</td>
								<td class="column100 column4" align="center" data-column="column4"><input type="text" name=txtproprice placeholder="Product Price" value=<?php echo $row[7];?> maxlength="50" size="20"></td>
							</tr>
							<tr class="row100">
								<td class="column100 column1"  data-column="column1" colspan=4 align="center"><input type="submit" name="txtupdate" value="Update"></td> 
							</tr>
							<tr class="row100">
								<?php echo @"<td colspan=4 align='center'>$msg </td>" ?>;
							</tr>
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