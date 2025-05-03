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
    $firstName        = $_POST['name']             ?? '';
    $lastName         = '';
    $email            = $_POST['email']            ?? '';
    $phone            = $_POST['phone']            ?? '';
    $companyType      = $_POST['type1']            ?? '';
    $message          = $_POST['additional']       ?? '';
    
    $selectedDate     = $_POST['selected-date']     ?? '';
    $hour             = $_POST['hour']              ?? '';
    $amPm             = $_POST['am-pm']             ?? '';
    $selectedTime     = trim($hour . ' ' . $amPm);
    $selectedTimezone = $_POST['timezone']          ?? '';
    $hiretype         = $_POST['hiretype']          ?? '';
    $budgettype       = $_POST['budgettype']        ?? '';
    $currency         = $_POST['currency']          ?? '';
    $hireframe        = $_POST['hireframe']         ?? '';
    $frameworks       = $_POST['frameworks']        ?? [];
    $frameworkList    = implode(', ', $frameworks);

    $mail->isSMTP();
    $mail->Host = 'localhost';
    $mail->Port = 25;
    $mail->SMTPAuth = false;
    $mail->SMTPSecure = false;

    $mail->setFrom('bookings@ketratech.net', 'KetraTech');
    $mail->addAddress('support@ketratech.net');
    $mail->addReplyTo($email, "$firstName $lastName");

    $mail->isHTML(true);
    $mail->Subject = 'New Hire Devs Submission';

    $mail->Body = "
        <h2>New Hire Devs Submission</h2>
        <p><strong>Name:</strong> {$firstName} {$lastName}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>Company/Type:</strong> {$companyType}</p>
        <p><strong>Date:</strong> {$selectedDate}</p>
        <p><strong>Time:</strong> {$selectedTime}</p>
        <p><strong>Timezone:</strong> {$selectedTimezone}</p>
        <p><strong>Frameworks:</strong> {$frameworkList}</p>
        <p><strong>Hire Type:</strong> {$hiretype}</p>
        <p><strong>Budget Type:</strong> {$budgettype} ({$currency})</p>
        <p><strong>Estimated Hireframe:</strong> {$hireframe}</p>
    ";

    $mail->AltBody = "New booking from $firstName $lastName - Email: $email - Phone: $phone";

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
