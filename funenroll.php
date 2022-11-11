<?php
include "connection.php";

$s = $_REQUEST['s']; 
$teach =  $_REQUEST['teach']; 
$sid = $_REQUEST['sid']; 
$cc =  $_REQUEST['cc']; 
$fullname= $_REQUEST['fullname'];
$query= "INSERT INTO enrolledcourses(subjectname,teacher,studentID,classcode) values ('$s','$teach','$sid','$cc')";
$queryy= "INSERT INTO conversations(studentID,classcode,studentname) values ('$sid','$cc','$fullname')";
mysqli_query($conn, $query);
mysqli_query($conn, $queryy);
header("Location: register.php");
die;



