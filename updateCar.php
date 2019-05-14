<?php
      include("server.php");
	  session_start();
	   //add to database
	  if(isset($_POST['update'])){
	   $c_id = $_POST['c_id'];
	   $c_name = $_POST['c_name'];
	   $c_color = $_POST['c_color'];
	   $c_plateno = $_POST['c_plateno'];
	   $c_type = $_POST['c_type'];
	   $c_status = $_POST['c_status'];
	   
	   //$query = "INSERT INTO car (car_name, car_color, car_plateNo, car_type, car_status) VALUES ('$c_name', '$c_color', '$c_plateno', '$c_type', ' $c_status')";
	   $queryUpdate = "update car set car_name = '$c_name', car_color = '$c_color', car_plateNo= '$c_plateno', car_type= '$c_type', car_status='$c_status' where id = $c_id";
	   mysqli_query($db, $queryUpdate);
	   
	   $_SESSION['msg'] = "Car has been updated";
	   header('location: AddCar.php'); // redirect to crud.php after inserting
	  
	   if(!$query){
			   
			   die('mysql error: ' . mysql_error());
		   }
	  }



?>