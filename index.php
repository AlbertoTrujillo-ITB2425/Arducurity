<?php include("get_username.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arducurity - Home Security</title>
    <link rel="icon" type="image/x-icon" href="fotos/logo.ico"> <!-- Favicon -->
    <link rel="stylesheet" href="ardu.css"> <!-- External CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> <!-- FontAwesome para iconos -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> <!-- jQuery -->
</head>
<body>
    <div class="content-wrapper"> <!-- Contenedor general -->
        <!-- Header -->
        <header class="header" style="text-align: center; padding: 20px; position: relative;">
            <div class="user-info" style="position: absolute; top: 10px; left: 20px; display: flex; align-items: center;">
                <div class="welcome-message" style="margin-right: 10px;">
                    <?php echo "Welcome to arducurity, $username!"; ?>
                </div>
                <div class="auth-buttons">
                    <a href="logout.php?username=<?php echo $username; ?>" >Log Out</a>
                </div>
            </div>
            <img src="fotos/logo.png" alt="Arducurity Logo" class="logo" style="height: 100px; width: auto; margin-top: 40px;">
            <div class="header-content" style="margin-top: 20px;">
                <h1>Arducurity</h1>
                <p>Security before everything</p>
            </div>
            <div class="social-media-bar" style="margin-top: 10px;"> <!-- Redes sociales -->
                <a href="https://www.facebook.com/arducurity"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/arducurity"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/arducurity"><i class="fab fa-instagram"></i></a>
            </div>
        </header>

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

        <!-- Google Translate -->
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
            }
        </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

        <style>
            .welcome-message {
                background-color: #333;
                color: #fff;
                padding: 10px 20px;
                border-radius: 5px;
            }

            .welcome-message:hover {
                background-color: #45a049;
            }

            .accordion {
                background-color: #ccc;
                color: white;
                cursor: pointer;
                padding: 18px;
                width: 50%;
                border: none;
                text-align: center;
                outline: none;
                font-size: 15px;
                transition: 0.4s;
                margin: 10px auto;
            }

            .active, .accordion:hover {
                background-color: #FFF;
            }

            .panel {
                padding: 0 18px;
                background-color: #333;
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.2s ease-out;
            }

            .review-form {
                display: flex;
                flex-direction: column;
                max-width: 600px;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
                color: #FFFFFF;
                margin: auto;
            }

            .review-form label {
                font-weight: bold;
            }

            .review-form input,
            .review-form select,
            .review-form textarea {
                border: 1px solid #ccc;
                border-radius: 5px;
                padding: 10px;
                box-sizing: border-box;
                width: 100%;
            }

            .review-form textarea {
                height: 100px;
            }

            .review-form button {
                padding: 10px 20px;
                background-color: #4CAF50;
                color: white;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                margin-top: 20px;
            }

            .review-form button:hover {
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

            .section p {
                display: none;
            }

            .logo {
                display: block;
                margin: 0 auto;
            }
        </style>

        <div class="content-wrapper"> <!-- Contenedor general -->
            <!-- Agregar un contenedor para el traductor -->
            <div id="google_translate_element" style="position: absolute; padding: 5px; top: 0px; right: 20px"></div> <!-- Posición del widget -->

            <!-- Main Content -->
            <div class="main-content">
                <!-- Añadir imagen con estilo -->
                <img src="fotos/image.png" alt="domotic house arducurity" style="width: 1000px; max-width: 1000px; margin: 1px auto; display: block; border: 2px solid #333;"> <!-- Imagen con estilos -->

                <h2>Company Information</h2>

                <button class="accordion">Company Name and description</button>
                <div class="panel">
                    <p>Arducurity is a company specializing in the development of intelligent security and surveillance systems using Arduino technology and a wide range of sensors.</p>
                    <p>We focus on providing innovative and accessible solutions for the protection of homes and businesses by integrating electronic devices and sensors</p>
                    <p>that offer surveillance, intrusion detection, and access control functionalities.</p>
                </div>

                <button class="accordion">Business Idea</button>
                <div class="panel">
                    <p>Arducurity offers a modern and efficient alternative to traditional security systems, incorporating emerging technologies</p>
                    <p>such as Arduino to create monitoring and control devices that are more accessible, customizable, and easy to install.</p>
                    <p>By using sensors for motion, light, sound, and other variables, our products offer advanced protection and immediate response to dangerous situations.</p>
                </div>

                <button class="accordion">Specific and Well-defined Objectives</button>
                <div class="panel">
                    <ul>
                        <p>- Develop a range of innovative and reliable security and surveillance products using Arduino technology and state-of-the-art sensors.</p>
                        <p>- Offer customized security solutions that fit the specific needs of customers, from video surveillance systems to advanced access controls.</p>
                        <p>- Provide exceptional customer service, including installation, configuration, and after-sales support to ensure our customers' satisfaction.</p>
                        <p>- Establish strategic alliances with companies in the technology and security sector to keep up with the latest market trends and innovations.</p>
                        <p>- Promote awareness of the importance of security and smart surveillance in our residential and commercial environments through public awareness and education campaigns.</p>
                    </ul>
                </div>

                <script>
                    // JavaScript para el funcionamiento del desplegable
                    var accordions = document.getElementsByClassName("accordion");

                    for (var i = 0; i < accordions.length; i++) {
                        accordions[i].addEventListener("click", function () {
                            this.classList.toggle("active");
                            var panel = this.nextElementSibling;
                            if (panel.style.maxHeight) {
                                panel.style.maxHeight = null;
                            } else {
                                panel.style.maxHeight = panel.scrollHeight + "px";
                            }
                        });
                    }
                </script>

                <div class="section">
                    <h3>About Us</h3>
                    <p>Discover our range of security services and products.</p>
                    <a href="aboutus.html" class="section-link">Learn More</a>
                </div>

                <div class="section">
                    <h3>Services</h3>
                    <p>Learn about our mission, values, and our dedicated team.</p>
                    <a href="services.html" class="section-link">Read More</a>
                </div>

                <div class="section">
                    <h3>Contact</h3>
                    <p>Find our contact information to get in touch with us.</p>
                    <a href="contact.html" class="section-link">Reach Out</a>
                </div>

                <hr style="border-top: 2px #FFA; margin: 10px 0;">
                <div class="review-form">
                    <h2>Submit a Review</h2>
                    <form action="submit_review.php" method="post">
                        <div>
                            <label for="username">Name:</label>
                            <input type="text" id="username" name="username" required placeholder="Enter your name">
                        </div>

                        <div>
                            <label for="rating">Rating (1-5):</label>
                            <select id="rating" name="rating" required>
                                <option value="" disabled selected>Select a rating</option>
                                <option value="1">1 - Poor</option>
                                <option value="2">2 - Fair</option>
                                <option value="3">3 - Good</option>
                                <option value="4">4 - Very Good</option>
                                <option value="5">5 - Excellent</option>
                            </select>
                        </div>

                        <div>
                            <label for="comment">Comment:</label>
                            <textarea id="comment" name="comment" required placeholder="Write your comment"></textarea>
                        </div>

                        <button type="submit">Submit Review</button>
                    </form>
                </div>

                <!-- Lista para mostrar reseñas existentes -->
                <div id="review-list">
                    <!-- Reseñas se añadirán aquí dinámicamente -->
                </div>
                <script src="fetch_reviews.js"></script> <!-- Enlace a JavaScript para obtener y mostrar reseñas -->
            </div>
            <script src="reviews.js"></script> <!-- Enlace al archivo JavaScript -->
        </div>

        <!-- Footer -->
        <footer class="footer">
            <p>&copy; 2024 Arducurity. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
	

