<?php
include("server.php");
 //fetch record to be updated
	  if(isset($_GET['editid'])){
		  $id = $_GET['editid'];
		  $edit_state = true;
		  $rec = mysqli_query($db, "select * from staff where id = $id");
		  $record = mysqli_fetch_array($rec);
		  $fname = $record['firstName'];
		  $lname = $record['lastName'];
		  $email = $record['email'];
		  $pass = $record['password'];
		  $id = $record['id'];
	  }
?>
<html>
<head>
<title>How to create, read, update, delete from database: PHP and Mysql</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>

<!-- Create form here!-->
<form method="post" action="update.php">
<center><h4>Update Staff Information</h4></center>
<hr>
<input type="hidden" name="id" value="<?php echo $id;?>">
<div class="input-group">
<label>First Name</label>
<input type="text" name="fname" value="<?php echo $fname;?>">
</div>

<div class="input-group">
<label>Last Name</label>
<input type="text" name="lname" value="<?php echo $lname;?>">
</div>

<div class="input-group">
<label>Email</label>
<input type="email" name="email" value="<?php echo $email;?>">
</div>

<div class="input-group">
<label>Password</label>
<input type="password" name="pass" value="<?php echo $pass;?>">
</div>

<div class="input-group">
<button type="submit" name="update" class="btn">Update</button>
</div>
</form>
<!-- End of the form!-->
</body>
</html>