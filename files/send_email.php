<?php
require '../vendor/autoload.php'; // Include the SendGrid library

// Load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// Get the form data
$username = $_POST['username'];
$contactnumber = $_POST['contactnumber'];
$email = $_POST['email'];
$address = $_POST['address'];
$plan = $_POST['plan'];

// SendGrid API key
$sendgridApiKey = $_ENV['SENDGRID_API_KEY'];

// Create a new SendGrid instance
$sendgrid = new \SendGrid($sendgridApiKey);

// Prepare the email details
$fromEmail = new \SendGrid\Mail\From('vmane5785@gmail.com', 'Anuj Mane');
$toEmail = new \SendGrid\Mail\To('anujmane007@gmail.com', 'Anuj Mane');
$subject = 'Anybody Wants to connect with our SM Construction Family';

// Build the email content
$emailContent = new \SendGrid\Mail\Mail();
$emailContent->setFrom($fromEmail);
$emailContent->setSubject($subject);
$emailContent->addTo($toEmail);
    
// Compose the email body
$body = "
Name: $username
Contact Number: $contactnumber
Email: $email
Address: $address
Plan: $plan
";

$emailContent->addContent(
    'text/plain', $body
);

try {
    // Send the email
    $response = $sendgrid->send($emailContent);

    // Check if the email was sent successfully
    if ($response->statusCode() === 202) {
        echo "<script>alert('Email sent successfully.');window.location.href='connect.php';</script>";
    } else {
        echo "<script>alert('Failed to send email. Status code: " . $response->statusCode() . "');window.location.href='connect.php';</script>";
    }
} catch (Exception $e) {
    echo "<script>alert('Error sending email: " . $e->getMessage() . "');window.location.href='connect.php';</script>";
}
?>