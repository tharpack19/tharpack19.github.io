<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "tharpack19@gmail.com";
    $subject = "New Contact Form Submission";
    
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Message:\n$message";
    
    mail($to, $subject, $message);
    
    header("Location: thank-you.html"); // Redirect to a thank you page
    exit;
}
?>
