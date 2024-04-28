<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "minhajulislama@gmail.com";
    $subject = $name;
    $body = $message;
    $headers = "From: $email";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Your message has been sent successfully.');</script>";
    } else {
        echo "<script>alert('Failed to send your message. Please try again.');</script>";
    }
}
?>