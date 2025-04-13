<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You!</title>
    <link rel="stylesheet" href="/assets/css/thank-you.css">
</head>
<body>
    <div class="container">
        <h1>Thank You!</h1>
        <p>Your submission has been received. We appreciate your time!</p>
        <a href="/" class="button">Go Back Home</a>
    </div>

    <script>

        function createConfetti() {
            const confetti = document.createElement('div');
            confetti.classList.add('confetti');

            const size = Math.random() * 10 + 5;
            confetti.style.width = `${size}px`;
            confetti.style.height = `${size}px`;

            confetti.style.left = `${Math.random() * 100}vw`;
            confetti.style.top = `-10vh`;

            const colors = ["#ff6f61", "#ffcd61", "#61ffb3", "#61a3ff", "#d061ff"];
            confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];

            document.body.appendChild(confetti);

            setTimeout(() => {
                confetti.remove();
            }, 3000);
        }

        setInterval(createConfetti, 200);
    </script>

</body>

</html>

