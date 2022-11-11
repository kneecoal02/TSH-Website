<?php
include "connection.php";
$scode =  $_REQUEST['scode'];
		$sname = $_REQUEST['sname'];
		$teacher = $_REQUEST['teacher']; 
		$tid =  $_REQUEST['tid']; 
		 
		 
		$query= "INSERT INTO subjects(classcode,subjectname,teacher,teacherid) values ('$scode','$sname','$teacher','$tid')";
		mysqli_query($conn, $query);
		header("Location: subjects.php");
		die;