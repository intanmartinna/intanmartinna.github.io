<?php

$servername = "localhost";
$database = "project_bakery_database";
$username = "root";
$password = "";
$conn = mysqli_connect('localhost','root','','project_bakery_database');


if (!$conn){
	die("Connection failed :" . mysqli_connect_error());
}
?>