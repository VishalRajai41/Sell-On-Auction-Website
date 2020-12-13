<script>
function loadsubcategory(str) {
 
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("subcategory").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "subcategory.php?id=" + str, true);
        xmlhttp.send();

  
}
</script>

<?php

	include("connect.php");
	@ session_start();
		if (isset($submit))
		 {
		 	$id=$_SESSION['uid'];
			$path="Upload/".$_FILES['file1']['name'];
			move_uploaded_file($_FILES['file1']['tmp_name'],"Upload/".$_FILES['file1']['name']);

			$status='N';
			@mysqli_query($con,"insert into selling(uid,pro_cat,sub_cat,proname,details,propic,proprice,profrom,proto,status) values($id,$listcategory,'$subcategory','$txtpname','$txtdetail','$path','$txtproprice','$from','$to','$status')") or die(mysqli_error($con));
			header("selling.php");
		
		}
	if(isset($btnlogout))
	{
		unset($_SESSION['user']);
		header("location:../user/index.php");
	}

?> 	

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
body{
 
  width: 100%;
  height:auto;
  overflow-x: hidden;
  background-image: url("slide3.jpg");
  background-size:cover;
  background-attachment: fixed;
  background-repeat: no-repeat;

}
table{
	 box-shadow: 0 0 10px black,0 0 10px black,0 5px 1px white;
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
<form method=post  enctype="multipart/form-data">
<!--<p align=right><input type=submit style="padding-right:50px;" name=btnlogout value=Logout> </p>-->
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<center><table data-vertable="ver1" style="width:60%;">
						<thead>
							<tr class="row100 head" align="center">
								<th class="column100 column2" data-column="column2" colspan=6><center><h4>New Product Entry</h4></center></th>
							</tr>
							
						</thead>
						<tbody>
							<tr class="row100">
								<td class="column100 column1" align="center" data-column="column1">Product Category</td>
								<td class="column100 column2"  align="center" data-column="column2">
			<select name="listcategory" onchange="loadsubcategory(this.value)">
				<option>-------Select-------</option>
			<?php 				
			$result=mysqli_query($con,"select * from category_master") or die(mysqli_error($con));
				while($row=mysqli_fetch_array($result)) 
				{
					echo "<option value=$row[0]>$row[1]</option>";
				}
			?>
			</select>
								</td>
							</tr>
							<tr class="row100"> 
								<td class="column100 column3"  align="center" data-column="column3">Sub Category</td>
								<td class="column100 column2"  align="center" data-column="column2">
								<select name="subcategory" id="subcategory">
								<option>-------Select-------</option>
			</select>
								</td>
							</tr>
							<tr class="row100">
								<td class="column100 column5"  align="center" data-column="column5">Product Name</td>
								<td class="column100 column6" align="center" data-column="column6"><input type="txt" name=txtpname maxlength="30" size="20"></td>
							</tr>
							<tr class="row100">
								<td class="column100 column7" align="center" data-column="column7">Product Detail</td>
								<td class="column100 column8" align="center" data-column="column8"><textarea rows="4" cols="15" name="txtdetail"></textarea></td>
							</tr>
							<tr class="row100">
								<td class="column100 column1" align="center" data-column="column1">Product Image</td>
								<td class="column100 column2" data-column="column2"  align="center" colspan="2" align="right"><input type="file" name="file1" ></td>
							</tr>
							<tr class="row100">
								<td class="column100 column3" data-column="column3" align="center">Product Price</td>
								<td class="column100 column4" align="center" data-column="column4"><input type="text" name=txtproprice  maxlength="50" size="20"></td>
							</tr>
							<tr class="row100">
								<td class="column100 column5" align="center"  data-column="column5">Auction period</td>
								<td class="column100 column6" align="center" data-column="column6">From <br><input type="date" name=from></td>
								<td class="column100 column7"  align="center" data-column="column7">To</td>
								<td class="column100 column8" align="center" data-column="column8"><input type="date" name=to ></td>
							</tr>
							<tr class="row100">
								<td class="column100 column1"  data-column="column1" colspan=4 align="center"><input type="submit" name="submit" value="  Save Detail  "></td> 
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