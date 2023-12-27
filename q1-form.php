


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $name = $_POST["name"];
  $department = $_POST["department"];
  $domain = $_POST["domain"];
  $topics = $_POST["topics"];
  $phd = $_POST["phd"];
  $impact = $_POST["impact"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $assistance = $_POST["assistance"];

  // Compose email
  $adminEmail = "zonduotechnology@gmail.com"; // Admin's email address
  $subject = "Annexure Booking Details";
  $message = "Annexure order has been booked:\n\n";
  $message .= "Name: $name\n";
  $message .= "Department: $department\n";
  $message .= "Domain: $domain\n";
  $message .= "Topics: $topics\n";
  $message .= "To be published in which quartile?: $phd\n";
  $message .= "Impact Factor: $impact\n";
  $message .= "Email: $email\n";
  $message .= "Mobile Number: $phone\n";
  $message .= "Do you need assistance?: $assistance\n";

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
