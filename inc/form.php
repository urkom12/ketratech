<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$mail = new PHPMailer(true);

try {
    $firstName = $_POST['first-name'] ?? '';
    $lastName = $_POST['last-name'] ?? '';
    $email = $_POST['email'] ?? '';
    $company = $_POST['company'] ?? '';
    $message = $_POST['additional-message'] ?? '';

    $selectedDate = $_POST['selected-date'] ?? '';
    $selectedTime = $_POST['selected-time'] ?? '';
    $selectedTimezone = $_POST['selected-timezone'] ?? '';
    $selectedType = $_POST['selected-type'] ?? '';

    $mail->isSMTP();
    $mail->Host = 'mail.privateemail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $_ENV['MAIL_USERNAME'];
    $mail->Password = $_ENV['MAIL_PASSWORD'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom($_ENV['MAIL_USERNAME'], 'KetraTech');
    $mail->addAddress('support@ketratech.net');

    $mail->isHTML(true);
    $mail->Subject = 'New Booking Submission';

    $mail->Body = "
        <h2>New Booking Submission</h2>
        <p><strong>Name:</strong> {$firstName} {$lastName}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Company:</strong> {$company}</p>
        <p><strong>Message:</strong> {$message}</p>
        <p><strong>Date:</strong> {$selectedDate}</p>
        <p><strong>Time:</strong> {$selectedTime}</p>
        <p><strong>Timezone:</strong> {$selectedTimezone}</p>
        <p><strong>Appointment ID:</strong> {$selectedType}</p>
    ";

    $mail->AltBody = "New booking from $firstName $lastName - Email: $email";
    $mail->ContentType = 'text/html; charset=UTF-8';
    $mail->addReplyTo($email, "$firstName $lastName");

    $mail->send();

    header('Location: /thank-you');
    exit;
} catch (Exception $e) {
    header('Location: /error-page');
    exit;
}
