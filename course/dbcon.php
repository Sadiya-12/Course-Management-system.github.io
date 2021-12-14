<?php
$host="localhost";
$user="root";
$pass="";
$dbname="course";
$con=mysqli_connect($host,$user,$pass)
or die("could not connect server");
mysqli_select_db($con,$dbname) or
die("could not select database");
?>


