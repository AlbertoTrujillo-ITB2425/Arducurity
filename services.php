<?php include("get_username.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Services - Arducurity</title>
    <link rel="icon" type="image/x-icon" href="fotos/logo.ico"> <!-- Favicon -->
    <link rel="stylesheet" href="ardu.css"> <!-- External CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> <!-- FontAwesome for icons -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> <!-- jQuery -->
    <script src="reserve.js"></script> <!-- Script de validación y reserva -->
    <style>
        .product-details {
            display: none;
            margin-top: 20px;
        }

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
<body style="background-color: color white;">
    <div class="content-wrapper" style="padding: 20px;">
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
            <div class="header-content" style="text-align: center;">
                <h1>Services - Arducurity</h1>
                <p>Our Security Solutions</p>
            </div>
            <div class="social-media-bar"> <!-- Social Media Links -->
                <a href="https://www.facebook.com/arducurity"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/arducurity"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/arducurity"><i class="fab fa-instagram"></i></a>
            </div>
        </header>

        <!-- Google Translate -->
        <div id="google_translate_element" style="position: absolute; padding: 5px; top: 10px; right: 20px; color: white;"></div>
        <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
        </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

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

        <!-- Layout de dos columnas -->
        <div style="display: flex; justify-content: space-between;">
            <!-- Productos (Columna Izquierda) -->
            <div style="flex: 1; padding-right: 20px;">
                <h2>Our Home Automation Sensors</h2>
                <p>Discover our state-of-the-art sensors for a smart home:</p>

                <!-- Producto 1 -->
                <div class="product">
                    <h3>Motion Sensor</h3>
                    <img src="fotos/images2.png" alt="domotic house arducurity">
                    <button class="show-details">More</button>
                    <div class="product-details">
                        <p>Our motion sensor detects changes in the environment and alerts you to potential intrusions or unwanted activity.</p>
                        <p>Maintain full control over your home's security with this advanced sensor. <strong>Price: 29,99€</strong></p>
                    </div>
                </div>

                <!-- Producto 2 -->
                <div class="product">
                    <h3>Luminosity Sensor</h3>
                    <img src="fotos/images3.png" alt="domotic house arducurity">
                    <button class="show-details">More</button>
                    <div class="product-details">
                        <p>With our luminosity sensor, you can automate your home lighting based on natural light conditions.</p>
                        <p>Save energy and create a more comfortable atmosphere in your home with this smart device. <strong>Price: 19,99€</strong></p>
                    </div>
                </div>

                <!-- Producto 3 -->
                <div class="product">
                    <h3>Ultrasonic Sensor</h3>
                    <img src="fotos/images4.png" alt="domotic house arducurity">
                    <button class="show-details">More</button>
                    <div class="product-details">
                        <p>The ultrasonic sensor provides precise distance measurements, allowing you to create detection systems and efficiently avoid obstacles.</p>
                        <p>Optimize control of your home automation devices with this advanced technology. <strong>Price: 34,99€</strong></p>
                    </div>
                </div>

                <!-- Producto 4 -->
                <div class="product">
                    <h3>Humidity Sensor</h3>
                    <img src="fotos/images5.png" alt="domotic house arducurity">
                    <button class="show-details">More</button>
                    <div class="product-details">
                        <p>Our humidity sensor helps you monitor and control humidity levels in your home to prevent issues like mold and condensation.</p>
                        <p>Maintain a healthy and comfortable environment at all times with this essential sensor. <strong>Price: 24,99€</strong></p>
                    </div>
                </div>
            </div>

            <!-- Formulario de Reserva (Columna Derecha) -->
            <div style="flex: 1;">
                <div class="reservation-form" style="background-color: #333; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);">
                    <h3>Reservation Form</h3>
                    <p>Fill out the form to reserve a product.</p>
                    <form id="reservation-form">
                        <!-- User Information -->
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required><br><br>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required><br><br>

                        <!-- Product Selection -->
                        <label for="product">Product:</label>
                        <select id="product" name="product" required>
                            <option value="motion-sensor">Motion Sensor - 29,99€</option>
                            <option value="luminosity-sensor">Luminosity Sensor - 19,99€</option>
                            <option value="ultrasonic-sensor">Ultrasonic Sensor - 34,99€</option>
                            <option value="humidity-sensor">Humidity Sensor - 24,99€</option>
                        </select><br><br>

                        <!-- Payment Information -->
                        <h3>Payment Information</h3>
                        <label for="payment-method">Payment Method:</label>
                        <select id="payment-method" name="payment-method" required>
                            <option value="credit-card">Credit Card</option>
                            <option value="paypal">PayPal</option>
                        </select><br><br>

                        <!-- Credit Card Details -->
                        <div id="credit-card-details" style="display: none;">
                            <label for="card-number">Card Number:</label>
                            <input type="text" id="card-number" name="card-number"><br><br>
                            <label for="expiration-date">Expiration Date:</label>
                            <input type="month" id="expiration-date" name="expiration-date"><br><br>
                            <label for="cvv">CVV:</label>
                            <input type="text" id="cvv" name="cvv"><br><br>
                        </div>

                        <!-- PayPal Details -->
                        <div id="paypal-details" style="display: none;">
                            <label for="paypal-email">PayPal Email:</label>
                            <input type="email" id="paypal-email" name="paypal-email"><br><br>
                        </div>

                        <button type="submit" class="button-hover">Reserve Now</button>
                    </form>
                </div>
            </div>
        </div> <!-- Fin del Layout de dos columnas -->
        <h1></h1>
        <div class="video-container">
            <p></p>
            <p></p>
        </div>

        <!-- Footer -->
        <footer class="footer" style="padding: 10px;">
            <p>&copy; 2024 Arducurity. All rights reserved.</p>
        </footer>
    </div> <!-- End of Content Wrapper -->
    <script>
        $(document).ready(function(){
            $(".show-details").click(function(){
                $(this).next(".product-details").slideToggle();
            });

            $('#payment-method').change(function(){
                if ($(this).val() === 'credit-card') {
                    $('#credit-card-details').show();
                    $('#paypal-details').hide();
                } else if ($(this).val() === 'paypal') {
                    $('#credit-card-details').hide();
                    $('#paypal-details').show();
                }
            });
        });
    </script>
</body>
</html>


































