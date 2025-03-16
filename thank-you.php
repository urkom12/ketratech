

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Thank You!</title>

    <style>

        body {

            margin: 0;

            font-family: Arial, sans-serif;

            background: linear-gradient(145deg, #2e026b, #450d96);

            color: white;

            display: flex;

            justify-content: center;

            align-items: center;

            height: 100vh;

            overflow: hidden;

        }



        .container {

            text-align: center;

            animation: fadeIn 1.5s ease-in-out;

        }



        h1 {

            font-size: 3rem;

            margin: 0;

        }



        p {

            font-size: 1.2rem;

            margin: 10px 0 20px;

        }



        .button {

            display: inline-block;

            margin-top: 20px;

            padding: 10px 20px;

            background: #6a0dad;

            color: white;

            text-decoration: none;

            font-size: 1rem;

            border-radius: 25px;

            transition: background-color 0.3s ease, transform 0.3s ease;

        }



        .button:hover {

            background-color: #8145c3;

            transform: scale(1.05);

        }



        .confetti {

            position: absolute;

            width: 10px;

            height: 10px;

            background-color: white;

            opacity: 0.8;

            border-radius: 50%;

            animation: fall 3s linear infinite;

        }



        @keyframes fall {

            0% {

                transform: translateY(-100vh) translateX(0);

                opacity: 0.8;

            }

            50% {

                opacity: 1;

            }

            100% {

                transform: translateY(100vh) translateX(20vw);

                opacity: 0;

            }

        }



        @keyframes fadeIn {

            0% {

                opacity: 0;

            }

            100% {

                opacity: 1;

            }

        }

    </style>

</head>

<body>

    <div class="container">

        <h1>Thank You!</h1>

        <p>Your submission has been received. We appreciate your time!</p>

        <a href="index.html" class="button">Go Back Home</a>

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

