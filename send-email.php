<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $first_name = $_POST['first-name'];
  $last_name = $_POST['last-name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Set recipient email address
  $to = "djerdichouaib@gmail.com";

  // Set email subject
  $subject = "New message from " . $first_name . " " . $last_name;

  // Set email message
  $body = "Name: " . $first_name . " " . $last_name . "\n\n";
  $body .= "Email: " . $email . "\n\n";
  $body .= "Message: \n" . $message;

  // Set email headers
  $headers = "From: " . $email . "\r\n";
  $headers .= "Reply-To: " . $email . "\r\n";

  // Send email
  if (mail($to, $subject, $body, $headers)) {
    echo "Thank you for your message!";
  } else {
    echo "Oops! Something went wrong. Please try again later.";
  }
}
?>
