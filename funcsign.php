<?php
include "connection.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
		$user_name= $_POST['user_name'];
		$pass= $_POST['pass'];
		$fullname= $_POST['fullname'];
		$stat= $_POST['stat'];
		$contact= $_POST['contact'];
		$addr= $_POST['addr'];

		if(!empty($user_name) && !empty($pass) && !empty($fullname) && !empty($stat) && !empty($contact) && !empty($addr)){
			$query = "INSERT INTO accounts (username,password,fullname,status,cntctnum,address,locked) values ('$user_name','$pass','$fullname','$stat','$contact','$addr','False')";
			mysqli_query($conn, $query);
			header("Location: register.php");
			die;


		}
	}
	