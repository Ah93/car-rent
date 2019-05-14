<?php
      include("server.php");
	  
	  session_start();
	  
	  
	  
	  //add to database
	  if(isset($_POST['save'])){
	   
	   $c_name = $_POST['c_name'];
	   $c_color = $_POST['c_color'];
	   $c_plateno = $_POST['c_plateno'];
	   $c_type = $_POST['c_type'];
	   $c_status = $_POST['c_status'];
	   
	   $query = "INSERT INTO car (car_name, car_color, car_plateNo, car_type, car_status) VALUES ('$c_name', '$c_color', '$c_plateno', '$c_type', ' $c_status')";
	   mysqli_query($db, $query);
	   
	   $_SESSION['msg'] = "Car has been added";
	   header('location: AddCar.php'); // redirect to crud.php after inserting
	  
	   if(!$query){
			   
			   die('mysql error: ' . mysql_error());
		   }
	  }
?>