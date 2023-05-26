<?php
require '../vendor/autoload.php'; // Include the SendGrid library

// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];

// Load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// SendGrid API key
$sendgridApiKey = $_ENV['SENDGRID_API_KEY'];

// Create a new SendGrid instance
$sendgrid = new \SendGrid($sendgridApiKey);

// Prepare the email details
$fromEmail = new \SendGrid\Mail\From('vmane5785@gmail.com', 'Anuj Mane');
$toEmail = new \SendGrid\Mail\To('anujmane007@gmail.com', 'Anuj Mane');
$subject = 'New Message Received via SM Construction Website';

// Build the email content
$emailContent = new \SendGrid\Mail\Mail();
$emailContent->setFrom($fromEmail);
$emailContent->setSubject($subject);
$emailContent->addTo($toEmail);

// Compose the email body
$body = "
Name: $name
Email: $email
Contact Number: $number
Message: $message
";

$emailContent->addContent(
    'text/plain', $body
);

try {
    // Send the email
    $response = $sendgrid->send($emailContent);

    // Check if the email was sent successfully
    if ($response->statusCode() === 202) {
        // Alert message
        echo "<script>alert('Message Successfully Sent to SM Constructions.');window.location.href='../index.php';</script>";
       
    } else {
        echo "<script>alert('Failed to send email. Status code: " . $response->statusCode() . "');window.location.href='../index.php';</script>";
    }
} catch (Exception $e) {
    echo "<script>alert('Error sending email: " . $e->getMessage() . "'); window.location.href='../index.php';</script>";
}
?>