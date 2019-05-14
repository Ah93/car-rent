<?php
include("server.php");
 //fetch record to be updated
	  if(isset($_GET['rentid'])){
		  $id = $_GET['rentid'];
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
<form method="post" action="UpdateStatus.php">
<center><h4>Rent Car</h4></center>
<hr>
<input type="hidden" name="c_id" value="<?php echo $c_id;?>" readonly>
<div class="input-group">
<label>Car Name</label>
<input type="text" name="c_name" value="<?php echo $c_name;?> " readonly>
</div>

<div class="input-group">
<label>Car Color</label>
<input type="text" name="c_color" value="<?php echo $c_color;?>" readonly>
</div>

<div class="input-group">
<label>Car plate number</label>
<input type="text" name="c_plateno" value="<?php echo $c_plateno;?>" readonly>
</div>

<div class="input-group">
<label>Car Type</label>
<input type="text" name="c_type" value="<?php echo $c_type;?>" readonly>
</div>

<div class="input-group">
<label>Car status</label>
<input type="text" name="c_status" value="<?php echo $c_status;?>" readonly>
</div>

<div class="input-group">
<button type="submit" name="rent" class="btn">Rent</button>
</div>
</form>
<!-- End of the form!-->
</body>
</html>