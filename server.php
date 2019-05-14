<?php
    //start the session
	session_start();
	//initiliaze vari
    $fname = "";
	$lname = "";
	$email = "";
	$pass = "";
	$edit_state = false;
    
	//connect to database
   $db = mysqli_connect('localhost', 'root', '', 'test');
   
   //if button is clicked
   if(isset($_POST['save'])){
	   
	   $fname = $_POST['fname'];
	   $lname = $_POST['lname'];
	   $email = $_POST['email'];
	   $pass = $_POST['pass'];
	   
	   $query = "INSERT INTO staff (firstName, lastName, email, password) VALUES ('$fname', '$lname', '$email', '$pass')";
	   mysqli_query($db, $query);
	   $_SESSION['msg'] = "Record has been added";
	   header('location: crud.php'); // redirect to crud.php after inserting
	   
	   
	   
	   //Retrieve records
	
	   $result = mysqli_query($db, "select * from staff");
	   
   }
   
      

?>