<?php include ('config.php');


$orderID = $_GET['id'];
$status = $_GET['status'];

$command = "UPDATE ordering SET = '' where orderID = '$orderID'"
$conn->query{$command};

?>