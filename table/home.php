<?php 
include("connect.php");
@session_start(); 
extract($_REQUEST);
extract($_REQUEST);
$result=mysqli_query($con,"select * from user_m") or die(mysql_error($con));
$con=mysqli_connect("localhost","root","") or die("Connection failed...");
mysqli_select_db($con,"auction") or die("Database not found..");

if(empty($_SESSION['admin']))
	header("location:../admin/index.php");
	
if(isset($btnlogout))
{
	unset($_SESSION['admin']);
	header("location:../admin/index.php");
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
</head>
<body>
	
<form>
<p align=right><input type=submit name=btnlogout style="padding-right:50px;"  value=Logout> </p>

	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<table data-vertable="ver1" >
						<thead>
							<tr class="row100 head">
								<th class="column100 column2" data-column="column2" >Person's Name</th>
								<th class="column100 column3" data-column="column3">Email</th>
								<th class="column100 column5" data-column="column5">City</th>
								<th class="column100 column4" data-column="column4">Phone No</th>
								<th class="column100 column6" data-column="column6" colspan=2  >Approve/Disapprove</th>
							</tr>
						</thead>
						<tbody>

								<?php
									

					     	while($row=mysqli_fetch_array($result))
							{
									echo "<tr class='row100'>";
									echo "<td class=' column1' data-column='column1' align='center'	>$row[1]</td>";
									echo "<td class='column100 column2' data-column='column2'>$row[2]</td>";
									echo "<td class='column100 column3' data-column='column3'>$row[4]</td>";
									echo "<td class='column100 column4' data-column='column4'>$row[5] </td>";
									echo "<td class='column100 column3' data-column='column3'><a href=../admin/approve.php?id=$row[0]&&flag=Approve> Approve </a><a href=../admin/approve.php?id=$row[0]&&flag=Disapprove> Disapprove </a></td>";
									echo " <td class='column100 column3' data-column='column3'><a href=delete.php?did=$row[0]&&flag=Delete> Delete </a></td>";
									echo "<tr>";
								}
								
								
							?>	
							<!--	
								<td class="column100 column5" data-column="column5">8:00 AM</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">5:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Jane Medina</td>
								<td class="column100 column2" data-column="column2">--</td>
								<td class="column100 column3" data-column="column3">5:00 PM</td>
								<td class="column100 column4" data-column="column4">5:00 PM</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">9:00 AM</td>
								<td class="column100 column7" data-column="column7">--</td>
								<td class="column100 column8" data-column="column8">--</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Billy Mitchell</td>
								<td class="column100 column2" data-column="column2">9:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">2:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Beverly Reid</td>
								<td class="column100 column2" data-column="column2">--</td>
								<td class="column100 column3" data-column="column3">5:00 PM</td>
								<td class="column100 column4" data-column="column4">5:00 PM</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">9:00 AM</td>
								<td class="column100 column7" data-column="column7">--</td>
								<td class="column100 column8" data-column="column8">--</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Tiffany Wade</td>
								<td class="column100 column2" data-column="column2">8:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">8:00 AM</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">5:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Sean Adams</td>
								<td class="column100 column2" data-column="column2">--</td>
								<td class="column100 column3" data-column="column3">5:00 PM</td>
								<td class="column100 column4" data-column="column4">5:00 PM</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">9:00 AM</td>
								<td class="column100 column7" data-column="column7">--</td>
								<td class="column100 column8" data-column="column8">--</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Rachel Simpson</td>
								<td class="column100 column2" data-column="column2">9:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">2:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Mark Salazar</td>
								<td class="column100 column2" data-column="column2">8:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">8:00 AM</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">5:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>-->
						</tbody>
					</table>
				</div>

				<!--<div class="table100 ver2 m-b-110">
					<table data-vertable="ver2">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1"></th>
								<th class="column100 column2" data-column="column2">Sunday</th>
								<th class="column100 column3" data-column="column3">Monday</th>
								<th class="column100 column4" data-column="column4">Tuesday</th>
								<th class="column100 column5" data-column="column5">Wednesday</th>
								<th class="column100 column6" data-column="column6">Thursday</th>
								<th class="column100 column7" data-column="column7">Friday</th>
								<th class="column100 column8" data-column="column8">Saturday</th>
							</tr>
						</thead>
						<tbody>
							<tr class="row100">
								<td class="column100 column1" data-column="column1">Lawrence Scott</td>
								<td class="column100 column2" data-column="column2">8:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">8:00 AM</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">5:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Jane Medina</td>
								<td class="column100 column2" data-column="column2">--</td>
								<td class="column100 column3" data-column="column3">5:00 PM</td>
								<td class="column100 column4" data-column="column4">5:00 PM</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">9:00 AM</td>
								<td class="column100 column7" data-column="column7">--</td>
								<td class="column100 column8" data-column="column8">--</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Billy Mitchell</td>
								<td class="column100 column2" data-column="column2">9:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">2:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Beverly Reid</td>
								<td class="column100 column2" data-column="column2">--</td>
								<td class="column100 column3" data-column="column3">5:00 PM</td>
								<td class="column100 column4" data-column="column4">5:00 PM</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">9:00 AM</td>
								<td class="column100 column7" data-column="column7">--</td>
								<td class="column100 column8" data-column="column8">--</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Tiffany Wade</td>
								<td class="column100 column2" data-column="column2">8:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">8:00 AM</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">5:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Sean Adams</td>
								<td class="column100 column2" data-column="column2">--</td>
								<td class="column100 column3" data-column="column3">5:00 PM</td>
								<td class="column100 column4" data-column="column4">5:00 PM</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">9:00 AM</td>
								<td class="column100 column7" data-column="column7">--</td>
								<td class="column100 column8" data-column="column8">--</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Rachel Simpson</td>
								<td class="column100 column2" data-column="column2">9:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">2:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Mark Salazar</td>
								<td class="column100 column2" data-column="column2">8:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">8:00 AM</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">5:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>
						</tbody>
					</table>
				</div>-->

				<!--<div class="table100 ver3 m-b-110">
					<table data-vertable="ver3">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1"></th>
								<th class="column100 column2" data-column="column2">Sunday</th>
								<th class="column100 column3" data-column="column3">Monday</th>
								<th class="column100 column4" data-column="column4">Tuesday</th>
								<th class="column100 column5" data-column="column5">Wednesday</th>
								<th class="column100 column6" data-column="column6">Thursday</th>
								<th class="column100 column7" data-column="column7">Friday</th>
								<th class="column100 column8" data-column="column8">Saturday</th>
							</tr>
						</thead>
						<tbody>
							<tr class="row100">
								<td class="column100 column1" data-column="column1">Lawrence Scott</td>
								<td class="column100 column2" data-column="column2">8:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">8:00 AM</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">5:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Jane Medina</td>
								<td class="column100 column2" data-column="column2">--</td>
								<td class="column100 column3" data-column="column3">5:00 PM</td>
								<td class="column100 column4" data-column="column4">5:00 PM</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">9:00 AM</td>
								<td class="column100 column7" data-column="column7">--</td>
								<td class="column100 column8" data-column="column8">--</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Billy Mitchell</td>
								<td class="column100 column2" data-column="column2">9:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">2:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Beverly Reid</td>
								<td class="column100 column2" data-column="column2">--</td>
								<td class="column100 column3" data-column="column3">5:00 PM</td>
								<td class="column100 column4" data-column="column4">5:00 PM</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">9:00 AM</td>
								<td class="column100 column7" data-column="column7">--</td>
								<td class="column100 column8" data-column="column8">--</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Tiffany Wade</td>
								<td class="column100 column2" data-column="column2">8:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">8:00 AM</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">5:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Sean Adams</td>
								<td class="column100 column2" data-column="column2">--</td>
								<td class="column100 column3" data-column="column3">5:00 PM</td>
								<td class="column100 column4" data-column="column4">5:00 PM</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">9:00 AM</td>
								<td class="column100 column7" data-column="column7">--</td>
								<td class="column100 column8" data-column="column8">--</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Rachel Simpson</td>
								<td class="column100 column2" data-column="column2">9:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">2:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Mark Salazar</td>
								<td class="column100 column2" data-column="column2">8:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">8:00 AM</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">5:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>
						</tbody>
					</table>
				</div>-->

			<!--	<div class="table100 ver4 m-b-110">
					<table data-vertable="ver4">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1"></th>
								<th class="column100 column2" data-column="column2">Sunday</th>
								<th class="column100 column3" data-column="column3">Monday</th>
								<th class="column100 column4" data-column="column4">Tuesday</th>
								<th class="column100 column5" data-column="column5">Wednesday</th>
								<th class="column100 column6" data-column="column6">Thursday</th>
								<th class="column100 column7" data-column="column7">Friday</th>
								<th class="column100 column8" data-column="column8">Saturday</th>
							</tr>
						</thead>
						<tbody>
							<tr class="row100">
								<td class="column100 column1" data-column="column1">Lawrence Scott</td>
								<td class="column100 column2" data-column="column2">8:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">8:00 AM</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">5:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Jane Medina</td>
								<td class="column100 column2" data-column="column2">--</td>
								<td class="column100 column3" data-column="column3">5:00 PM</td>
								<td class="column100 column4" data-column="column4">5:00 PM</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">9:00 AM</td>
								<td class="column100 column7" data-column="column7">--</td>
								<td class="column100 column8" data-column="column8">--</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Billy Mitchell</td>
								<td class="column100 column2" data-column="column2">9:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">2:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Beverly Reid</td>
								<td class="column100 column2" data-column="column2">--</td>
								<td class="column100 column3" data-column="column3">5:00 PM</td>
								<td class="column100 column4" data-column="column4">5:00 PM</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">9:00 AM</td>
								<td class="column100 column7" data-column="column7">--</td>
								<td class="column100 column8" data-column="column8">--</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Tiffany Wade</td>
								<td class="column100 column2" data-column="column2">8:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">8:00 AM</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">5:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Sean Adams</td>
								<td class="column100 column2" data-column="column2">--</td>
								<td class="column100 column3" data-column="column3">5:00 PM</td>
								<td class="column100 column4" data-column="column4">5:00 PM</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">9:00 AM</td>
								<td class="column100 column7" data-column="column7">--</td>
								<td class="column100 column8" data-column="column8">--</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Rachel Simpson</td>
								<td class="column100 column2" data-column="column2">9:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">2:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Mark Salazar</td>
								<td class="column100 column2" data-column="column2">8:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">8:00 AM</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">5:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>
						</tbody>
					</table>
				</div>-->

			<!--	<div class="table100 ver5 m-b-110">
					<table data-vertable="ver5">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1"></th>
								<th class="column100 column2" data-column="column2">Sunday</th>
								<th class="column100 column3" data-column="column3">Monday</th>
								<th class="column100 column4" data-column="column4">Tuesday</th>
								<th class="column100 column5" data-column="column5">Wednesday</th>
								<th class="column100 column6" data-column="column6">Thursday</th>
								<th class="column100 column7" data-column="column7">Friday</th>
								<th class="column100 column8" data-column="column8">Saturday</th>
							</tr>
						</thead>
						<tbody>
							<tr class="row100">
								<td class="column100 column1" data-column="column1">Lawrence Scott</td>
								<td class="column100 column2" data-column="column2">8:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">8:00 AM</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">5:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Jane Medina</td>
								<td class="column100 column2" data-column="column2">--</td>
								<td class="column100 column3" data-column="column3">5:00 PM</td>
								<td class="column100 column4" data-column="column4">5:00 PM</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">9:00 AM</td>
								<td class="column100 column7" data-column="column7">--</td>
								<td class="column100 column8" data-column="column8">--</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Billy Mitchell</td>
								<td class="column100 column2" data-column="column2">9:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">2:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Beverly Reid</td>
								<td class="column100 column2" data-column="column2">--</td>
								<td class="column100 column3" data-column="column3">5:00 PM</td>
								<td class="column100 column4" data-column="column4">5:00 PM</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">9:00 AM</td>
								<td class="column100 column7" data-column="column7">--</td>
								<td class="column100 column8" data-column="column8">--</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Tiffany Wade</td>
								<td class="column100 column2" data-column="column2">8:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">8:00 AM</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">5:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Sean Adams</td>
								<td class="column100 column2" data-column="column2">--</td>
								<td class="column100 column3" data-column="column3">5:00 PM</td>
								<td class="column100 column4" data-column="column4">5:00 PM</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">9:00 AM</td>
								<td class="column100 column7" data-column="column7">--</td>
								<td class="column100 column8" data-column="column8">--</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Rachel Simpson</td>
								<td class="column100 column2" data-column="column2">9:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">2:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Mark Salazar</td>
								<td class="column100 column2" data-column="column2">8:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">8:00 AM</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">5:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>
						</tbody>
					</table>
				</div>-->

<!--				<div class="table100 ver6 m-b-110">
					<table data-vertable="ver6">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1"></th>
								<th class="column100 column2" data-column="column2">Sunday</th>
								<th class="column100 column3" data-column="column3">Monday</th>
								<th class="column100 column4" data-column="column4">Tuesday</th>
								<th class="column100 column5" data-column="column5">Wednesday</th>
								<th class="column100 column6" data-column="column6">Thursday</th>
								<th class="column100 column7" data-column="column7">Friday</th>
								<th class="column100 column8" data-column="column8">Saturday</th>
							</tr>
						</thead>
						<tbody>
							<tr class="row100">
								<td class="column100 column1" data-column="column1">Lawrence Scott</td>
								<td class="column100 column2" data-column="column2">8:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">8:00 AM</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">5:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Jane Medina</td>
								<td class="column100 column2" data-column="column2">--</td>
								<td class="column100 column3" data-column="column3">5:00 PM</td>
								<td class="column100 column4" data-column="column4">5:00 PM</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">9:00 AM</td>
								<td class="column100 column7" data-column="column7">--</td>
								<td class="column100 column8" data-column="column8">--</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Billy Mitchell</td>
								<td class="column100 column2" data-column="column2">9:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">2:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Beverly Reid</td>
								<td class="column100 column2" data-column="column2">--</td>
								<td class="column100 column3" data-column="column3">5:00 PM</td>
								<td class="column100 column4" data-column="column4">5:00 PM</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">9:00 AM</td>
								<td class="column100 column7" data-column="column7">--</td>
								<td class="column100 column8" data-column="column8">--</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Tiffany Wade</td>
								<td class="column100 column2" data-column="column2">8:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">8:00 AM</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">5:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Sean Adams</td>
								<td class="column100 column2" data-column="column2">--</td>
								<td class="column100 column3" data-column="column3">5:00 PM</td>
								<td class="column100 column4" data-column="column4">5:00 PM</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">9:00 AM</td>
								<td class="column100 column7" data-column="column7">--</td>
								<td class="column100 column8" data-column="column8">--</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Rachel Simpson</td>
								<td class="column100 column2" data-column="column2">9:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">2:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Mark Salazar</td>
								<td class="column100 column2" data-column="column2">8:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">8:00 AM</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">5:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>
						</tbody>
					</table>
				</div>-->
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