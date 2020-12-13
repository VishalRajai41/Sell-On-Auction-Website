<?php 	
		include("connect.php");
		$result=mysqli_query($con,"select * from sub_category_m where cat_id=$id") or die(mysqli_error($con));
		while($row=mysqli_fetch_array($result)) 
		{
			echo "<option value=$row[0]>$row[1]</option>";
		}
?>