
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$to = "hafsahayub124@gmail.com"; // Replace with the recipient's email address
$subject = "Test Email";
$message = "This is a test email sent from my XAMPP server.";

$headers = "From: hafsahayub228@gmail.com"; // Replace with your email address

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Email sending failed.";
}
?>
