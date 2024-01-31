<?php
include('config.php');
$orderID = $_GET['id'];
$status = $_GET['data'];
$command = "SELECT statusName FROM status WHERE statusId='$status'";
$statusname = mysqli_fetch_row($conn->query($command))[0];
$query = "UPDATE ordering SET status = '$statusname' WHERE orderID = '$orderID'";
$result = $conn->query($query);

if ($result) {
    echo "Status updated successfully.";
}
header("Location: orderadmin.php");
?>
