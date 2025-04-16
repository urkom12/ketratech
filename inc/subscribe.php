<?php
session_start();

// Povezivanje sa bazom
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ketratech";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Konekcija nije uspela: " . $conn->connect_error);
}

// Provera CSRF tokena
if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    die("CSRF verifikacija nije uspela.");
}

// Provera da li su postavljeni email i prihvatanje uslova
if (isset($_POST['email']) && isset($_POST['privacy'])) {
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);

    // Provera validnosti email adrese
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Provera da li mejl već postoji u bazi
        $checkEmailQuery = "SELECT * FROM subscribers WHERE email = ?";
        $stmt = $conn->prepare($checkEmailQuery);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            echo "Ovaj email je već prijavljen za obaveštenja.";
        } else {
            $stmt->close();

            $insertQuery = "INSERT INTO subscribers (email) VALUES (?)";
            $stmt = $conn->prepare($insertQuery);
            $stmt->bind_param("s", $email);

            if ($stmt->execute()) {
                echo "Uspešno ste se prijavili za obaveštenja!";
            } else {
                echo "Došlo je do greške prilikom prijave. Pokušajte ponovo.";
            }
        }

        $stmt->close();
    } else {
        echo "Neispravna email adresa.";
    }
} else {
    echo "Morate uneti email i prihvatiti uslove.";
}

$conn->close();
?>
