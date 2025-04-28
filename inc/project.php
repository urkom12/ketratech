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

$mail = new PHPMailer(true);

try {
    $firstName          = $_POST['name']             ?? '';
    $lastName           = '';
    $email              = $_POST['email']            ?? '';
    $phone              = $_POST['phone']            ?? '';
    $projectTitle       = $_POST['title']            ?? '';
    $projectDescription = $_POST['description']      ?? '';
    $status             = $_POST['status']           ?? '';
    $frameworks         = $_POST['frameworks']       ?? '';
    $budgetType         = $_POST['budget']           ?? '';
    $estBudget          = $_POST['estbudget']        ?? '';
    $timeframe          = $_POST['timeframe']        ?? '';

    $selectedDate       = $_POST['selected-date']    ?? '';
    $hour               = $_POST['hour']             ?? '';
    $amPm               = $_POST['am-pm']            ?? '';
    $selectedTime       = trim($hour . ' ' . $amPm);
    $selectedTimezone   = $_POST['timezone']         ?? '';

    $mail->isSMTP();
    $mail->Host = 'localhost';
    $mail->Port = 25;
    $mail->SMTPAuth = false;
    $mail->SMTPSecure = false;

    $mail->setFrom('bookings@ketratech.net', 'KetraTech');
    $mail->addAddress('support@ketratech.net');
    $mail->addReplyTo($email, "$firstName $lastName");

    $mail->isHTML(true);
    $mail->Subject = 'New Project Submission';

    $mail->Body = "
        <h2>New Project Submission</h2>
        <p><strong>Name:</strong> {$firstName} {$lastName}</p>
        <p><strong>Email:</strong> {$email}</p>
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

    $mail->AltBody = "New Project submission from $firstName $lastName - Email: $email - Phone: $phone";

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
