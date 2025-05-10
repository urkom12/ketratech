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
    return substr(htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8'), 0, $maxLength);
}

$firstName          = clean_input($_POST['name']            ?? '', 100);
$emailRaw           = trim($_POST['email']                  ?? '');
$phone              = clean_input($_POST['phone']           ?? '', 30);
$projectTitle       = clean_input($_POST['title']           ?? '', 150);
$projectDescription = clean_input($_POST['description']     ?? '', 2000);
$status             = clean_input($_POST['status']          ?? '', 100);
$frameworks         = clean_input($_POST['frameworks']      ?? '', 300);
$budgetType         = clean_input($_POST['budget']          ?? '', 50);
$estBudget          = clean_input($_POST['estbudget']       ?? '', 50);
$timeframe          = clean_input($_POST['timeframe']       ?? '', 100);
$selectedDate       = clean_input($_POST['selected-date']   ?? '', 20);
$hour               = clean_input($_POST['hour']            ?? '', 10);
$amPm               = clean_input($_POST['am-pm']           ?? '', 2);
$selectedTime       = trim($hour . ' ' . $amPm);
$selectedTimezone   = clean_input($_POST['timezone']        ?? '', 50);

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
    $mail->Subject = 'New Project Submission';

    $mail->Body = "
        <h2>New Project Submission</h2>
        <p><strong>Name:</strong> {$firstName}</p>
        <p><strong>Email:</strong> {$emailRaw}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>Project Title:</strong> {$projectTitle}</p>
        <p><strong>Project Description:</strong> {$projectDescription}</p>
        <p><strong>Status:</strong> {$status}</p>
        <p><strong>Frameworks:</strong> {$frameworks}</p>
        <p><strong>Budget Type:</strong> {$budgetType}</p>
        <p><strong>Estimated Budget:</strong> {$estBudget}</p>
        <p><strong>Timeframe:</strong> {$timeframe}</p>
        <p><strong>Date:</strong> {$selectedDate}</p>
        <p><strong>Time:</strong> {$selectedTime}</p>
        <p><strong>Timezone:</strong> {$selectedTimezone}</p>
    ";

    $mail->AltBody = "New Project submission from $firstName - Email: $emailRaw - Phone: $phone";

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
