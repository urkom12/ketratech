<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

require __DIR__ . '/../vendor/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

if (!empty($_POST['website'])) {
    http_response_code(400);
    exit;
}

function clean_input($input, $maxLength = 255) {
    $clean = htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
    return substr($clean, 0, $maxLength);
}

$firstName        = clean_input($_POST['name']             ?? '', 100);
$emailRaw         = trim($_POST['email']                   ?? '');
$phone            = clean_input($_POST['phone']            ?? '', 30);
$companyType      = clean_input($_POST['type1']            ?? '', 100);
$consultationType = clean_input($_POST['type2']            ?? '', 100);
$message          = clean_input($_POST['additional']       ?? '', 1000);
$selectedDate     = clean_input($_POST['selected-date']    ?? '', 20);
$hour             = clean_input($_POST['hour']             ?? '', 10);
$amPm             = clean_input($_POST['am-pm']            ?? '', 2);
$selectedTimezone = clean_input($_POST['timezone']         ?? '', 50);
$selectedTime     = trim($hour . ' ' . $amPm);

if (!filter_var($emailRaw, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    exit("Invalid email address.");
}

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'localhost';
    $mail->Port = 25;
    $mail->SMTPAuth = false;
    $mail->SMTPSecure = false;

    $mail->setFrom('bookings@ketratech.net', 'KetraTech');
    $mail->addAddress('support@ketratech.net');
    $mail->addReplyTo($emailRaw, "$firstName");

    $mail->isHTML(true);
    $mail->Subject = 'New Consultation Submission';

    $mail->Body = "
        <h2>New Consultation Submission</h2>
        <p><strong>Name:</strong> {$firstName}</p>
        <p><strong>Email:</strong> {$emailRaw}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>Company/Type:</strong> {$companyType}</p>
        <p><strong>Consultation Type:</strong> {$consultationType}</p>
        <p><strong>Message:</strong> {$message}</p>
        <p><strong>Date:</strong> {$selectedDate}</p>
        <p><strong>Time:</strong> {$selectedTime}</p>
        <p><strong>Timezone:</strong> {$selectedTimezone}</p>
    ";

    $mail->AltBody = "New consultation submission from $firstName - Email: $emailRaw - Phone: $phone";

    $mail->send();
    header('Location: /thank-you');
    exit;
} catch (Exception $e) {
    echo '<h1>Mail Error</h1>';
    echo '<p>' . htmlspecialchars($mail->ErrorInfo) . '</p>';
    echo '<pre>' . htmlspecialchars($e->getMessage()) . '</pre>';
    error_log('PHPMailer Error: ' . $mail->ErrorInfo);
    error_log('Exception: ' . $e->getMessage());
    exit;
}
