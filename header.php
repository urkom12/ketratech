<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo isset($page_title) ? $page_title : 'KetraTech'; ?></title>
  <link rel="stylesheet" href="/assets/css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/styles.css?v=1.0.6">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <meta name="description" content="<?php echo isset($meta_description) ? $meta_description : 'Custom websites tailored to your business goals. Whether you\'re a startup or enterprise — we deliver clean, modern, and scalable solutions.'; ?>">
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-S27W16W40F"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-S27W16W40F');
</script>

<body style="background-color: #6c5ce7;">
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
