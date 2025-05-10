<?php
header('Content-Type: text/plain; charset=UTF-8');
session_start();

$servername = "localhost";
$username = "root";
$password = "vczUAX]YN^em";
$dbname = "ketratech";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection aborted: " . $conn->connect_error);
}

if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    die("CSRF verification failed.");
}

if (isset($_POST['email']) && isset($_POST['privacy'])) {
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $checkEmailQuery = "SELECT * FROM subscribers WHERE email = ?";
        $stmt = $conn->prepare($checkEmailQuery);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            echo "This E-Mail address is already subscribed.";
        } else {
            $stmt->close();

            $insertQuery = "INSERT INTO subscribers (email) VALUES (?)";
            $stmt = $conn->prepare($insertQuery);
            $stmt->bind_param("s", $email);

            if ($stmt->execute()) {
                echo "You have successfully subscribed for newsletter!";
            } else {
                echo "Error. Try again.";
            }
        }

        $stmt->close();
    } else {
        echo "Incorrect E-Mail address.";
    }
} else {
    echo "You must enter E-Mail address and accept the terms.";
}

$conn->close();
?>
