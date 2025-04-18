<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ketra Tech</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="/assets/css/styles.css">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/"><img src="img/logo.png" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link" href="/services" data-text="service">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="/contact" data-text="contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="/aboutus" data-text="about us">About us</a></li>
                        <li class="nav-item"><a class="nav-link" href="/careers" data-text="careers">Careers</a></li>
                    </ul>
                    <a href="/hire"><button class="schedule">Hire Now</button></a>
                </div>
            </div>
        </nav>    
    </header>
