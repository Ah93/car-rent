<?php
      //include db connection file
	  include("server.php");
	  
	  //start the session
	  session_start();
	  
	  //Delete record
	   if(isset($_GET['del'])){
		   $id = $_GET['del'];
		   mysqli_query($db, "delete from staff where id=$id");
		   $_SESSION['msg'] = "Record has been deleted";
	       header('location: crud.php');
	   }
?>