<?php
//call the mysql connection file
include("server.php");
//start the session
session_start();
//Update records
	   if(isset($_POST['update'])){
		   $fname = $_POST['fname'];
		   $lname = $_POST['lname'];
		   $email = $_POST['email'];
		   $password = $_POST['pass'];
		   $id = $_POST['id'];
		   
		   $queryUpdate = "update staff set firstName = '$fname', lastName = '$lname', email= '$email', password= '$password' where id = $id";
		   mysqli_query($db, $queryUpdate);
		    $_SESSION['msg'] = "Record has been updated";
	        header('location: crud.php'); // redirect to crud.php after inserting
		   if(!$queryUpdate){
			   
			   die('mysql error: ' . mysql_error());
		   }
	   }
?>