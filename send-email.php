<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    // SMTP settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Use Google's SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'theresearchit@gmail.com'; // Your Gmail
    $mail->Password = 'ykxs huxp beua wqje'; // Use the App Password, NOT your Gmail password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use TLS encryption
    $mail->Port = 587; // TLS port

    // Sender & Recipient
    $mail->setFrom('theresearchit@gmail.com', 'ResearchIt');
    $mail->addAddress($_POST['email'], $_POST['name']); // Customer email & name

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'Thank you for contacting ResearchIt';
    $mail->Body = '<h3>Hello ' . $_POST['name'] . ',</h3><p>We have received your message: ' . $_POST['message'] . '</p>';

    $mail->send();
    echo 'Message sent successfully';
} catch (Exception $e) {
    echo 'Error sending message. Please try again. Error: ', $mail->ErrorInfo;
}
?>
$mail->SMTPDebug = 2; // Enable detailed SMTP error messages
