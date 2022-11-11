<?php

$dbservername= "localhost";
$dbusername="root";
$dbpassword="";
$dbname="tshdatabase";
$conn = new mysqli($dbservername,$dbusername,$dbpassword,$dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}




