<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Error</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background: linear-gradient(145deg, #2e026b, #450d96);
      height: 100vh;
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      overflow: hidden;
    }

    h1 {
      font-size: 3rem;
      margin: 0;
      animation: fadeIn 2s ease-in-out, moveUpDown 3s infinite ease-in-out;
    }

    p {
      font-size: 1.2rem;
      margin: 20px 0;
      animation: fadeIn 2s ease-in-out;
    }

    a {
      text-decoration: none;
      color: #fff;
      background: #6a0dad;
      padding: 12px 20px;
      border-radius: 8px;
      font-size: 1rem;
      transition: background-color 0.3s ease, transform 0.2s ease;
      animation: fadeIn 2s ease-in-out 1s;
    }

    a:hover {
      background-color: #8145c3;
      transform: scale(1.1);
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }

    @keyframes moveUpDown {
      0%, 100% {
        transform: translateY(0);
      }
      50% {
        transform: translateY(-10px);
      }
    }

    .background-animation {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      z-index: -1;
    }

    .circle {
      position: absolute;
      background: rgba(255, 255, 255, 0.2);
      border-radius: 50%;
      animation: move 10s infinite linear;
      opacity: 0.8;
    }

    .circle:nth-child(1) {
      width: 100px;
      height: 100px;
      top: 10%;
      left: 20%;
      animation-duration: 12s;
      animation-delay: 0s;
    }

    .circle:nth-child(2) {
      width: 150px;
      height: 150px;
      top: 30%;
      left: 60%;
      animation-duration: 8s;
      animation-delay: 2s;
    }

    .circle:nth-child(3) {
      width: 200px;
      height: 200px;
      top: 70%;
      left: 40%;
      animation-duration: 15s;
      animation-delay: 4s;
    }

    @keyframes move {
      0% {
        transform: translateY(0) translateX(0);
      }
      100% {
        transform: translateY(-200vh) translateX(100vw);
      }
    }
  </style>
</head>
<body>
  <div class="background-animation">
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
  </div>
  <h1>Oops! Something went wrong.</h1>
  <p>We were unable to process your request. Please try again later.</p>
  <a href="hirenow.php">Go back to homepage</a>
</body>
</html>
