<?php
require ('header.html');
require 'config.php';
if(isset($_GET['delete'])) {
    $productId = $_GET['delete'];
    }


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="addtocart.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/bootstrap.css"> -->
</head>
<body>
	<div class="header">
		<p class="logo">Shopping Cart</p>
		<div class="cart"><i class="fa-solid fa-cart-shopping"></i></div>
     </div>
</div>
<div class="text-container">
            <form method="post" action="processqwerty.php" id="addingjer">
    
    <input required type="text" name="fullname" placeholder="Enter Name">

    <div class="row">
        <div class="col-50">

            <label for="phone"></label>
            <input required type="text" id="phone" name="phone" placeholder="Phone Number">
        </div>
        <div class="col-50">
            <label for="email"></label>
            <input required type="text" id="email" name="email" placeholder="Email">
        </div>
        <div class="col-50">
            <label for="date">Date of Pick Up:</label>
            <!-- <input required type="text" id="date" name="date" placeholder="Date of Pick-up"> -->

              <div>
                <!-- <label for="day">Date of Pick Up:</label> -->
                <select id="day" name="day">
                  <?php
                  // Generate options for day
                  for ($i = 1; $i <= 31; $i++) {
                    echo "<option value=\"$i\">$i</option>";
                  }
                  ?>
                </select>
              <!-- </div>
              <div> -->
                <!-- <label for="month">Bulan:</label> -->
                <select id="month" name="month">
                  <?php
                  // Generate options for month
                  for ($j = 1; $j <= 12; $j++) {
                    $monthName = date("F", mktime(0, 0, 0, $j, 1));
                    echo "<option value=\"$j\">$monthName</option>";
                  }
                  ?>
                </select>
              <!-- </div>
              <div> -->
                <!-- <label for="year">Tahun:</label> -->
                <select id="year" name="year">
                  <?php
                  // Generate options for year
                  $currentYear = date("Y");
                  $startYear = $currentYear - 10;
                  $endYear = $currentYear + 10;
                  for ($k = $startYear; $k <= $endYear; $k++) {
                    echo "<option value=\"$k\">$k</option>";
                  }
                  ?>
                </select>
              </div>
              <!-- <div>
                <button type="submit" name="add_to_cart">Add to Cart</button>
              </div> -->
            </form>




        </div>
        <div class="col-50">
            <label for="payment">Payment Method:</label>
            <select required id="payment" name="payment">
                <option value="cash">Cash</option>
                <option value="online">Online Payment</option>
            </select>
        </div>

    </div>
</div>

<!-- <div class="list card">
    <h1>Card</h1>
    <ul class="listCard"></ul>
    <div class="checkout">
        <div class="total">0</div>
        <div class="closeShopping">Close</div>
    </div>
</div> -->
<style type="text/css">
    .header {
  background-color: #C4A484;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

.logo {
  font-size: 24px;
  font-weight: bold;
  color: #222222;
  margin-bottom: 10px;
}

.cart {
  background-color: #f79123;
  color: white;
  padding: 8px;
  border-radius: 50%;
  font-size: 20px;
  cursor: pointer;
  float: right;
}

.text-container {
  max-width: 600px;
  margin: 0 auto;
  padding: 20px;
  background-color: #C4A484;
  border: 1px solid lightgrey;
  border-radius: 5px;
  margin-top: 20px;
}
.text-container label {
  margin-bottom: 10px;
  display: block;
}

.btn {
  background-color: #f79123;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
  text-transform: uppercase;
  transition: background-color 0.3s;
}
.btn:hover {
  background-color: #f57000;
}
hr {
  border: 1px solid lightgrey;
}

.foot {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 20px;
}
.foot h3 {
  margin-bottom: 0;
  font-size: 18px;
}

.foot h2 {
  margin-bottom: 0;
  font-size: 24px;
  color: #f79123;
}
.foot h3 {
  margin-bottom: 0;
  font-size: 18px;
}

.foot h2 {
  margin-bottom: 0;
  font-size: 24px;
  color: #f79123;
}
.checkout-cart button {
  background-color: #f79123;
  color: white;
  padding: 12px 30px;
  border: none;
  border-radius: 3px;
  font-size: 17px;
  text-transform: uppercase;
  cursor: pointer;
  transition: background-color 0.3s;
}

.checkout-cart button:hover {
  background-color: #f57000;
}
.product-container {
    display: flex;
    align-items: center;
    padding: 10px;
    border: 1px solid #ccc;
    margin-bottom: 10px;
    width: 65%;
    box-sizing: border-box;
    margin-left: auto;
    margin-right: auto;
    background-color: whitesmoke;
}


.image-container {
    width: 100px;
    margin-right: 10px;
}

.product-image {
    width: 100%;
    height: auto;
}

.product-details {
    flex-grow: 1;
}

.product-name {
    font-weight: bold;
    margin-bottom: 5px;
}

.product-quantity-label {
    margin-top: 5px;
}

.quantity-container {
    display: flex;
    align-items: center;
}

.quantity-input {
    width: 50px;
}

.product-price {
    margin-top: 5px;
}

.delete-container {
    margin-left: auto;
}

.delete-button {
    background-color: #ff4d4d;
    color: white;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
}
.col-25 {
    margin-bottom: 20px;
  }
.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}


.container {
  background-color: #C4A484;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 3px solid black;
  border-radius: 3px;
   
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #f79123;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #f79123;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}
</style>


		<!-- <div id="root"></div>
		<div class="sidebar"> -->
    			<!-- <div class="head"><p>My Cart</p></div> -->
     <!-- <div id="cartItem">Your cart is empty</div> -->
			<!-- <div class="sixteen columns medium-down--one-whole">
				<div class="section cart-extra-fields-wrap clearfix">
					<div class="cartnote-wrap enter-special">
						<label for="note">Enter Special wish</label>
						<textarea id="note" class="card-message-textarea" name="note" rows="2"></textarea>
					</div>
				</div>
			</div> -->
<?php
$command = "SELECT product.name, cart.quantity, product.image, product.price, cart.id
            FROM cart 
            INNER JOIN product ON cart.id = product.id;";
$result = $conn->query($command);

$total = 0; // Initialize total variable

while ($row = mysqli_fetch_row($result)) {
    ?>
    
    <div class="product-container">
        <div class="image-container">
            <img class="product-image" src="image/<?= $row[2] ?>">
        </div>
        <div class="product-details">
            <p class="product-name"><?= $row[0] ?></p>
            <hr>
            <p class="product-quantity-label">Quantity:
            <!-- <div class="quantity-container"> -->
                <input type="number" id="<?= $row[4] ?>" name="item" class="quantity-input detect-click" value="<?= $row[1] ?>">
            </div>
            </p>
        <!-- </div> -->
        <div class="delete-container">
            <a class="product-price">Price: RM <?= $row[3] ?></a>
            <!-- <a> Price: RM <p id="price<?= $row[4] ?>" class="product-price"><?= $row[3] ?></p></a> -->
            <a href="deleteCart.php?delete=<?= $row[4] ?>" class="delete-button"><i class="fa-solid fa-trash"></i></a>
        </div>
    </div>
    <?php

    // Calculate subtotal for each item
    $subtotal = $row[1] * $row[3];
    $total += $subtotal; // Add subtotal to the total
}
?>

<div class="foot">
    <h3>Total: </h3>
    RM <h2 id="total"><?= $total ?></h2>
</div>
<div class="checkout-cart">
    <a>
        <button type="submit" class="action_button add_to_cart checkout_original" id="checkout" name="checkout">CHECKOUT</button>
        
    </a>
</div>


</div>
<script src="addtocart.js"></script>
</body>
<form action="payment.php" method="post" id="asdasd">
    <input type="hidden" name="total" id="totallyhere">
</form>
<!-- <form action="processpayment.php" method="post" id="asdasd">
    <input type="hidden" name="total" id="totallyhere">
    <input type="" name="">
</form> -->
</html>

<script type="text/javascript">


    var buttons = document.getElementsByClassName("detect-click");
    var totalElement = document.getElementById("total");

    // var checking = document.getElementById('checkout');
    // checking.addEventListener('click', ()=>{
    //     var transfering = document.getElementById('totallyhere');
    //     transfering.value = totalElement.innerHTML;
    //     document.getElementById('asdasd').submit();
    // });
    var total = <?= $total ?>; // Initialize total variable with PHP value

    // Initialize an object to keep track of quantities
    var quantities = {};

    for (var i = 0; i < buttons.length; i++) {
        var button = buttons[i];
        var productId = button.id;
        var quantity = button.value;

        // Initialize the quantities object with initial quantities
        quantities[productId] = quantity;

        button.addEventListener('change', function () {
            var productId = this.id;
            var newQuantity = parseInt(this.value);

            var priceElement = document.getElementById("price" + productId);
            var price = parseFloat(priceElement.innerHTML);

            var oldQuantity = quantities[productId];
            var subtotal = price * (newQuantity - oldQuantity);

            total += subtotal; // Update total

            quantities[productId] = newQuantity; // Update quantities object

            totalElement.innerHTML = total.toFixed(2); // Update the total element
        });
    }
</script>
<script type="text/javascript">
    var buttons = document.getElementsByClassName("detect-click");
    var totalElement = document.getElementById("total");

    var checking = document.getElementById('checkout');
    checking.addEventListener('click', () => {
        var transfering = document.getElementById('totallyhere');
        transfering.value = totalElement.innerHTML;

        // Get the selected payment option
        var paymentMethod = document.getElementById('payment').value;

        if (paymentMethod === 'online') {
            document.getElementById('asdasd').submit();
        } else {
            document.getElementById('addingjer').submit();
            alert(" The order has been successfully place order!");
            window.location = "category.php";

        }
    });

    // Rest of the existing code
</script>
