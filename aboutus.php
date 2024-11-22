<?php include("get_username.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Arducurity</title>
    <link rel="icon" type="image/x-icon" href="fotos/logo.ico"> <!-- Favicon -->
    <link rel="stylesheet" href="ardu.css"> <!-- External CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> <!-- FontAwesome para iconos -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> <!-- jQuery -->
    <style>
        /* Estilos para el mensaje de bienvenida */
        .user-info {
            position: absolute;
            top: 10px;
            right: 20px;
            display: flex;
            align-items: center;
            z-index: 9999; /* Asegura que esté por encima de otros elementos */
        }

        .welcome-message {
            margin-right: 10px;
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
        }

        /* Estilo para el mensaje de bienvenida al pasar el cursor */
        .welcome-message:hover {
            background-color: #45a049;
        }

        .auth-buttons a {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 10px;
        }

        .auth-buttons a:hover {
            background-color: #45a049;
        }

        .header {
            text-align: center;
            padding: 20px;
            position: relative;
        }

        .logo {
            height: 100px;
            width: auto;
            margin-top: 60px; /* Asegura que el logo esté debajo del mensaje de bienvenida */
        }

        .header-content h1 {
            margin-top: 20px; /* Ajusta el margen superior según sea necesario */
        }

        .social-media-bar {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="content-wrapper">
        <!-- Header -->
        <header class="header">
	<div class="user-info" style="position: absolute; top: 10px; left: 20px; display: flex; align-items: center;">
                <div class="welcome-message">
                    <?php echo "Welcome to arducurity, $username!"; ?>
                </div>
                <div class="auth-buttons">
                    <a href="logout.php?username=<?php echo $username; ?>">Log Out</a>
                </div>
            </div>
	 <img src="fotos/logo.png" alt="Arducurity Logo" class="logo" style="height: 100px; width: auto; margin-top: 40px;">
            <div class="header-content">
                <h1>About Us - Arducurity</h1>
                <p>Our mission and values</p>
            </div>
            <div class="social-media-bar"> <!-- Redes sociales -->
                <a href="https://www.facebook.com/arducurity"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/arducurity"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/arducurity"><i class="fab fa-instagram"></i></a>
            </div>
        </header>
        
        <!-- Google Translate -->
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
            }
        </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
        <!-- Agregar un contenedor para el traductor -->
        <div id="google_translate_element" style="position: absolute; padding: 5px; top: 0px; right: 20px"></div> <!-- Posición del widget -->

        <!-- Navigation Bar -->
        <nav class="navbar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="ourwork.php">Works</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class="main-content">
            <h2>Our Mission</h2>
            <p>At Arducurity, our mission is to provide innovative security solutions that protect homes and businesses while promoting peace of mind.</p>
            <p>We strive to deliver high-quality products and exceptional customer service to ensure the safety and satisfaction of our clients.</p>

            <h2>Our Values</h2>
            <p>We are committed to integrity, excellence, and continuous improvement.</p>
            <p>We prioritize honesty, transparency, and accountability in all aspects of our business.</p>
            <p>Our goal is to build lasting relationships based on trust and reliability.</p>

            <h2>Our Team</h2>
            <div class="team-members"> <!-- Team members with adjustable gap -->
                <div class="team-member">
                    <img src="fotos/alberto.png" alt="Alberto Trujillo">
                    <p>Alberto Trujillo</p>
                </div>
                <div class="team-member">
                    <img src="fotos/steven.png" alt="Steven Zapata">
                    <p>Steven Zapata</p>
                </div>
                <div class="team-member">
                    <img src="fotos/oriol.png" alt="Oriol Nuñez">
                    <p>Oriol Nuñez</p>
                </div>
            </div>
        </div> <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="footer">
            <p>&copy; 2024 Arducurity. All rights reserved.</p>
        </footer>
    </div> <!-- End of Content Wrapper -->
</body>
</html>

