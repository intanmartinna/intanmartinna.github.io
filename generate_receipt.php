<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $amount = $_POST['amount'];

    // Perform payment processing logic here
    // Example: Saving payment details to a database

    // Display success message
    echo "Payment processed successfully!";

    // Redirect back to the payment form or to a thank you page
    // header("Location: payment_form.php");
}
?>
