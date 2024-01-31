<?php
require 'config.php';
$fullname = $_POST['fullname'];
$email = $_POST['email'];
// $address = $_POST['address'];
// $city = $_POST['city'];
// $zip = $_POST['zip'];
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
$conn->query("INSERT INTO ordering VALUES('', '$fullname', '', '$email', 'Online Payment', '$totalPrice','Payment')");
?>
<script type="text/javascript">
    alert(" The order has been successfully place order!");
            window.location = "category.php";
</script>
<?php
// header("Location: category.php");
// Code to handle cash payment
?>