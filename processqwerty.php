<?php 
require 'config.php';
$fullname = $_POST['fullname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
// $day = $_POST['day'];
// $month = $_POST['month'];
// $year = $_POST['year'];
$command = "SELECT product.name, cart.quantity, product.image, product.price, cart.id
            FROM cart 
            INNER JOIN product ON cart.id = product.id;";
$result = $conn->query($command);
$totalPrice = 0;
while($data = mysqli_fetch_array($result))
{
    $totalPrice += $data['price'];
    // $totalPrice = $totalPrice + $data['price'];
}
$conn->query("INSERT INTO ordering VALUES('', '$fullname', '$phone', '$email', 'Cash', '$totalPrice','Payment')");
// header("Location: category.php");

?>