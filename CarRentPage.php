<?php include('server.php');
//Retrieve records
	  $result = mysqli_query($db, "select * from car ");
?>

<html>
<head>
<title>How to create, read, update, delete from database: PHP and Mysql</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<?php 
  if(isset($_SESSION['msg'])):?>
  <div class="msg">
  <?php 
       echo $_SESSION['msg'];
	   unset ($_SESSION['msg']);
  ?>
  </div>
  <?php endif?>
<body>

<!-- Create table here!-->
<table id="staff">
<thead>
<tr>
<th>id</th>
<th>Car Name</th>
<th>Car Color</th>
<th>Car Plate Number</th>
<th>Car Type</th>
<th>Car Status</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php
while($row = mysqli_fetch_array($result)){
?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['car_name'];?></td>
<td><?php echo $row['car_color'];?></td>
<td><?php echo $row['car_plateNo'];?></td>
<td><?php echo $row['car_type'];?></td>
<td><?php echo $row['car_status'];?></td>
<td><a href="RentCar.php?rentid=<?php echo $row['id'];?>" class="edit_btn">Rent Now</a></td>
</tr>
<?php }?>
</tbody>
</table>
<!-- End od table!-->
</body>
</html>