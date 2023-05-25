<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstName = $_POST["first-name"];
  $lastName = $_POST["last-name"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  
  // Set up email headers
  $to = "jainnaman1708sft@gmail.com";
  $subject = "New Form Submission form Nasu.live";
  $headers = "From: $email\r\nReply-To: $email\r\n";
  
  // Construct the message
  $fullMessage = "Name: $firstName $lastName\n";
  $fullMessage .= "Phone: $phone\n";
  $fullMessage .= "Email: $email\n\n";
  $fullMessage .= "Message:\n$message";
  
  // Send the email
  if (mail($to, $subject, $fullMessage, $headers)) {
    echo "Thank you! Your message has been sent.";
  } else {
    echo "Sorry, there was an error sending your message.";
  }
}
?>
