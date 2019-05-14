<?php
    include("server.php");
	  session_start();
	   //add to database
	  if(isset($_POST['rent'])){
	   $c_id = $_POST['c_id'];
	   //$c_status = $_POST['c_status'];
	   
	   //$query = "INSERT INTO car (car_name, car_color, car_plateNo, car_type, car_status) VALUES ('$c_name', '$c_color', '$c_plateno', '$c_type', ' $c_status')";
	   $queryUpdate = "update car set car_status='Rented' where id = $c_id";
	   mysqli_query($db, $queryUpdate);
	   
	   $_SESSION['msg'] = "Car has been Rented";
	   header('location: CarRentPage.php'); // redirect to crud.php after inserting
	  
	   if(!$queryUpdate){
			   
			   die('mysql error: ' . mysql_error());
		   }
	  }
?>