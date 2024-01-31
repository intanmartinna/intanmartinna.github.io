<?php
require('header.html');
require('config.php');
session_start();

// Retrieve name and address from the payment table
$query = "SELECT fullname,zip, address, city, state FROM payment";
$result = mysqli_query($conn, $query);

  // Display the name and address in the checkout page

mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=advice-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href=categorystyle.css> 
  <title>Cake&Pastry</title>
</head> 
<body>
  <div class="cake">
    <div class="heading">
      <?php
      if ($result) {
  // Fetch the data from the result set
  $row = mysqli_fetch_assoc($result);
  
  // Extract the name and address
  $fullname = $row['fullname'];
  $address = $row['address'];
  $zip = $row['zip'];
  $city = $row['city'];
  $state = $row['state'];
  // $total = $_SESSION['total'];


  // Display the name and address in the checkout page
  echo "<h1>Print Receipt</h1>";
  echo "<div class='container-fluid'>";
  echo "<div class='row d-flex justify-content-center' style='column-gap: 20px;'>";
  echo "<div>";
  echo "<h3>Name: $fullname</h3>";
  echo "<h3>Address: $address,$zip,$city,$state</h3>";
  // echo "<h3>Total : $total</h3>";
  echo "</div>";
  echo "</div>";
  echo "</div>";
} else {
  echo "Error retrieving data from the payment table: " . mysqli_error($connection);
}


?>

    </div>
    <div class="container-fluid">
      <div class="row d-flex justify-content-center" style="column-gap: 20px;"  margin-bottom="0.5 rem">

        <body>

      </body>
  </body>
  </html>
