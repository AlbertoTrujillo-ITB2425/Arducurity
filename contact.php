<?php include("get_username.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Arducurity</title>
    <link rel="icon" type="image/x-icon" href="fotos/logo.ico"> <!-- Favicon -->
    <link rel="stylesheet" href="ardu.css"> <!-- External CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> <!-- FontAwesome para iconos -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> <!-- jQuery -->
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
                <h1>Contact Us - Arducurity</h1>
                <p>Get in Touch</p>
            </div>
            <div class="social-media-bar">
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
 <style>
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

        <!-- Contact Information -->
        <div style="display: flex; justify-content: center;"> <!-- Centrar el contenido -->
            <div style="max-width: 600px; width: 100%; background: naranja; padding: 20px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2); color: white;">
                <h2>Contact Information</h2>
                <table style="width: 100%; text-align: left;"> <!-- Ajusta el ancho y la alineación -->
                    <tr>
                        <td>Email:</td>
                        <td>support@arducurity.info</td>
                    </tr>
                    <tr>
                        <td>Phone:</td>
                        <td>213-932-3333</td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td>640 E California Ave, Bakersfield, United States of America</td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- Contact Form -->
        <div style="display: flex; justify-content: center; margin-top: 30px;"> <!-- Centra el formulario -->
                <div style="max-width: 600px; width: 100%; background: naranja; padding: 20px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2); color: white;">
                <h2>Contact Us</h2>
                <form id="contact-form" action="process_contact.php" method="post"> <!-- El nombre del archivo PHP -->
                    <div style="margin-bottom: 10px;">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required style="width: 50%; padding: 8px; border-radius: 5px;">
                    </div>
                    <div style="margin-bottom: 10px;">
                        <label para="email">Email:</label>
                        <input type="email id="email" name="email" required style="width: 50%; padding: 8px; border-radius: 5px;">
                    </div>
                    <div style="margin-bottom: 10px;">
                        <label para="subject">Subject:</label>
                        <input type="text" id="subject" name="subject" required style="width: 50%; padding: 8px; border-radius: 5px;">
                    </div>
                    <div style="margin-bottom: 10px;">
                        <label para="phone">Phone:</label>
                        <input type="text" id="phone" name="phone" required style="width: 50%; padding: 8px; border-radius: 5px;">
                    </div>
                    <div style="margin-bottom: 10px;">
                        <label para="message">Message:</label>
                        <textarea id="message" name="message" required style="width: 50%; padding: 8px; border-radius: 5px;"></textarea>
                    </div>
                    <div style="text-align: center;">
                        <button type="submit" style="padding: 10px 20px; background-color: naranja; color: black; border-radius: 5px;">Send</button>
                    </div>
                </form>
            </div>
	<!-- Mapa de Ubicación -->
	<div id="map-container">
	</div>
<iframe 
    width="520" 
    height="400" 
    frameborder="0" 
    scrolling="no" 
    marginheight="0" 
    marginwidth="0" 
    id="gmap_canvas" 
    src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=640%20E%20California%20Ave,%20Bakersfield,%20United%20States%20of%20America%20Barkersfield+(Arducurity%20Location)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
</iframe> 

<a href='https://www.versicherungen.at/lebensversicherung/'>Krankenversicherungsvergleich</a> 

<script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=cf3bef903ffd5655bf378b73551c5e77c3b976e7'>
</script>

        <!-- Footer -->
        <footer class="footer"> <!-- Footer con estilo predefinido -->
            <p>&copy; 2024 Arducurity. All rights reserved.</p>
        </footer>
    </div> <!-- Cierre del wrapper -->

    <!-- Script para procesar el formulario -->
    <script>
    $("#contact-form").on("submit", function(event) {
        event.preventDefault(); // Evitar recarga de página
        var formData = $(this).serialize(); // Serializar datos

        $.ajax({
            url: "process_contact.php", // Ruta para procesar formulario
            type: "POST",
            data: formData,
            success: function(response) {
                alert("Thank you for your message!"); // Mensaje de éxito
                $("#contact-form")[0].reset(); // Reiniciar formulario
            },
            error: function() {
                alert("An error occurred. Please try again."); // Mensaje de error
            }
        });
    });
    </script>
</body>
