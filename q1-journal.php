


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $name = $_POST["name"];
  $department = $_POST["department"];
  $domain = $_POST["domain"];
 
  $email = $_POST["email"];
  $phone = $_POST["phone"];
 
  // Compose email
  $adminEmail = "zonduotechnology@gmail.com"; // Admin's email address
  $subject = "Q1-Journal Booking Details";
  $message = "Q1-Journal order has been booked:\n\n";
  $message .= "Name: $name\n";
  $message .= "Department: $department\n";
  $message .= "Domain: $domain\n";
  $message .= "Email: $email\n";
  $message .= "Mobile Number: $phone\n";


  // Send email
  if (mail($adminEmail, $subject, $message)) {
    echo "Order submitted successfully.";
    header("location: thankyou-page.html");
  } else {
    echo "Failed to submit order. Please try again.";
    header("location: index.php");
  }
}
?>
