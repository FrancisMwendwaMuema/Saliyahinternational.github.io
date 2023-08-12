<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    
    $to = "francismuema37@gmail.com"; // Replace with your email address
    $subject = "Contact Form Submission";
    $message = "Name: $name\nContact: $contact\nEmail: $email";
    $headers = "From: $email";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for your message. We will get back to you soon.";
    } else {
        echo "Oops! Something went wrong.";
    }
}
?>



