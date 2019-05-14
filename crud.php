<?php include('server.php');
//Retrieve records
	  $result = mysqli_query($db, "select * from staff");
?>
<!DOCTYPE html>
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
<th>firstName</th>
<th>lastName</th>
<th>email</th>
<th>password</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
<?php
while($row = mysqli_fetch_array($result)){
?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['firstName'];?></td>
<td><?php echo $row['lastName'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['password'];?></td>
<td><a href="updatePage.php?editid=<?php echo $row['id'];?>" class="edit_btn">Edit</a></td>
<td><a href="delete.php?del=<?php echo $row['id'];?>" class="del_btn">delete</a></td>
</tr>
<?php }?>
</tbody>
</table>
<!-- End od table!-->

<!-- Create form here!-->
<form method="post" action="server.php">
<div class="input-group">
<label>First Name</label>
<input type="text" name="fname" value="">
</div>

<div class="input-group">
<label>Last Name</label>
<input type="text" name="lname" value="">
</div>

<div class="input-group">
<label>Email</label>
<input type="email" name="email" value="">
</div>

<div class="input-group">
<label>Password</label>
<input type="password" name="pass" value="">
</div>

<div class="input-group">
<button type="submit" name="save" class="btn">Save</button>
</div>
</form>
<!-- End of the form!-->
</body>
</html>