<!DOCTYPE html>
<html>
<head>
    <title>Receipt Payment</title>
</head>
<body>
    <!DOCTYPE html>
<html>
<head>
  <title>Receipt Printing</title>
  <style>
    @media print {
      /* Styles for printing */
      body {
        visibility: hidden;
      }
      #receipt,
      #receipt * {
        visibility: visible;
      }
      #receipt {
        position: absolute;
        left: 0;
        top: 0;
      }
    }
  </style>
  <script>
    function printdiv(printpage) {
      var headstr = "<html><head><title></title></head><body>";
      var footstr = "</body>";
      var newstr = document.all.item(printpage).innerHTML;
      var oldstr = document.body.innerHTML;
      document.body.innerHTML = headstr + newstr + footstr;
      window.print();
      document.body.innerHTML = oldstr;
      return false;
    }
  </script>
</head>
<body>
  <div id="receipt">
    <?php
      // Connect to your database
      $fullname = "fullname";
      $address = "address";
      $city = "city";
      $state = "state";
       $zip = "zip";
    ?>
    
    <!-- <?php -->
      // Connect to your database
      $fullname = "fullname";
      $address = "address";
      $city = "city";
      $state = "state";
       $zip = "zip";
    

      $conn = new mysqli($fullname, $address, $city, $state, $zip);
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      // Retrieve receipt data from the database
      $sql = "SELECT * FROM payment 
      // Modify the query based on your database structure
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Populate the receipt content
        <!-- <h1>Receipt</h1> -->
        <!-- echo "<p>Customer: " . $row['customer_name'] . "</p>";
        echo "<table>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Item</th>";
        echo "<th>Quantity</th>";
        echo "<th>Price</th>";
        echo "<th>Total</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>"; -->
       <!--  // Loop through receipt items
        while ($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row['item'] . "</td>";
          echo "<td>" . $row['quantity'] . "</td>";
          echo "<td>" . $row['price'] . "</td>";
          echo "<td>" . $row['total'] . "</td>";
          echo "</tr>";
        } -->
       <!--  echo "</tbody>";
        echo "</table>";
      } else {
        echo "No receipts found.";
      }
      
      $conn->close(); -->
    <!-- ?> -->
  </div>

  <button onclick="printdiv('receipt')">Print Receipt</button>
</body>
</html>



