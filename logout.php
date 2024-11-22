<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Closed</title>
    <link rel="icon" type="image/x-icon" href="fotos/logo.ico"> <!-- Favicon -->
    <link rel="stylesheet" href="login.css"> <!-- Estilo personalizado -->
    <style>
        body {
            font-family: 'Overpass', sans-serif;
            font-weight: normal;
            font-size: 100%;
            color: #FFFFFF;
            margin: 0;
            background-color: #1b262c;
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 100vw;
            min-height: 100vh;
        }

        #central {
            max-width: 320px;
            width: 100%;
        }

        .titulo {
            font-size: 250%;
            color: #ffa500;
            text-align: center;
            margin-bottom: 20px;
        }

        #login {
            width: 100%;
            padding: 50px 30px;
            background-color: #0f4c75;
            box-shadow: 0px 0px 5px 5px rgba(0, 0, 0, 0.15);
            border-radius: 3px;
            box-sizing: border-box;
        }

        .contenido {
            text-align: center;
            margin-bottom: 20px;
        }

        .pie-form {
            font-size: 90%;
            text-align: center;    
            margin-top: 15px;
        }

        .pie-form p {
            margin: 0;
            font-size: 120%;
        }

        #redirect-button {
            font-family: 'Overpass', sans-serif;
            font-size: 110%;
            color: #FFFFFF;
            width: 100%;
            height: 40px;
            border: none;
            border-radius: 3px;
            background-color: #ffa500;
            margin-top: 10px;
            cursor: not-allowed; /* Cambiar el cursor */
        }

        #redirect-button:hover {
            background-color: #ffa500; /* Mantener el color de fondo */
        }
    </style>
</head>
<body>
    <div id="contenedor">
        <div id="central">
            <div id="login">
                <div class="titulo">Session Closed</div>
                <div class="contenido">
                    <p>Session closed for <?php echo htmlspecialchars($_GET['username']); ?>.</p>
                    <!-- Evitar ataques XSS -->
                </div>
                <div class="pie-form">
                    <button id="redirect-button" disabled>Redirecting to home page in <span id="countdown">5</span> seconds...</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        var seconds = 5;
        var countdown = setInterval(function() {
            seconds--;
            document.getElementById("countdown").textContent = seconds;
            if (seconds <= 0) {
                clearInterval(countdown);
                window.location.href = "index.html";
            }
        }, 1000);
    </script>
</body>
</html>
