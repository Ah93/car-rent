<?php
include("server.php");
 //fetch record to be updated
	  if(isset($_GET['editid'])){
		  $id = $_GET['editid'];
		  $edit_state = true;
		  $rec = mysqli_query($db, "select * from car where id = $id");
		  $record = mysqli_fetch_array($rec);
		  $c_id = $record['id'];
		  $c_name = $record['car_name'];
		  $c_color = $record['car_color'];
		  $c_plateno = $record['car_plateNo'];
		  $c_type = $record['car_type'];
		  $c_status = $record['car_status'];
		  
	  }
?>
<html>
<head>
<title>How to create, read, update, delete from database: PHP and Mysql</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>

<!-- Create form here!-->
<form method="post" action="UpdateCar.php">
<center><h4>Update Car Information</h4></center>
<hr>
<input type="hidden" name="c_id" value="<?php echo $c_id;?>">
<div class="input-group">
<label>Car Name</label>
<input type="text" name="c_name" value="<?php echo $c_name;?>">
</div>

<div class="input-group">
<label>Car Color</label>
<input type="text" name="c_color" value="<?php echo $c_color;?>">
</div>

<div class="input-group">
<label>Car plate number</label>
<input type="text" name="c_plateno" value="<?php echo $c_plateno;?>">
</div>

<div class="input-group">
<label>Car Type</label>
<input type="text" name="c_type" value="<?php echo $c_type;?>">
</div>

<div class="input-group">
<label>Car status</label>
<input type="text" name="c_status" value="<?php echo $c_status;?>">
</div>

<div class="input-group">
<button type="submit" name="update" class="btn">Update</button>
</div>
</form>
<!-- End of the form!-->
</body>
</html>