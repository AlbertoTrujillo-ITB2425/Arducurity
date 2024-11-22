<?php
// Datos de conexión
$servername = "localhost";
$username = "administrator";
$password = "1234";
$database = "users";

// Conexión a la base de datos
$conn = mysqli_connect($servername, $username, $password, $database);

// Verificar la conexión
if (!$conn) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

// Comprobar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = $_POST["username"];
    $pass = $_POST["password"];

    // Consulta para verificar si el nombre de usuario ya está en uso
    $check_query = "SELECT id FROM users WHERE username = ?";
    $check_stmt = mysqli_prepare($conn, $check_query);
    mysqli_stmt_bind_param($check_stmt, "s", $user);
    mysqli_stmt_execute($check_stmt);
    $check_result = mysqli_stmt_get_result($check_stmt);

    // Si el nombre de usuario ya está en uso, devolver un mensaje de error
    if ($check_result && mysqli_num_rows($check_result) > 0) {
        echo "<h1>Error</h1>";
        echo "<p>El nombre de usuario ya está en uso</p>";
        exit();
    }

    // Hash de la contraseña
    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

    // Insertar nuevo usuario en la base de datos
    $insert_query = "INSERT INTO users (username, password_hash) VALUES (?, ?)";
    $insert_stmt = mysqli_prepare($conn, $insert_query);
    mysqli_stmt_bind_param($insert_stmt, "ss", $user, $hashed_password);

    if (mysqli_stmt_execute($insert_stmt)) {
    } else {
        // Mostrar mensaje de error directamente en HTML
        echo "<h1>Error</h1>";
        echo "<p>Error al registrar el usuario</p>";
    }

    mysqli_stmt_close($insert_stmt);
}

mysqli_close($conn);
?>
<?php
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['username'])) {
    // Si el usuario no ha iniciado sesión, redirigirlo al formulario de inicio de sesión
}
?>
       <script type="text/javascript">
                function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
                }
         </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Exitoso</title>
    <link rel="stylesheet" href="login.css"> <!-- Agrega el enlace al archivo login.css -->
    <!-- Enlaces a otros archivos CSS y JavaScript si es necesario -->
</head>
<body>
    <div id="contenedor">
        <div id="central">
            <div id="signup">
                <div class="titulo">Successful registration!</div>
                <div class="contenido">
                    <?php if(isset($_POST["username"])): ?>
                    <!-- Si se ha creado una cuenta de usuario -->
                    <?php
                    $user = $_POST["username"];
                    $date = date("d-m-Y");
                    ?>
                    <p>User account has been created <strong><?php echo $user; ?></strong> in <?php echo $date; ?>.</p>
                    <?php else: ?>
                    <!-- Si el usuario ya está registrado -->
                   <p>You are already registered!</p>
                    <?php endif; ?>
                </div>
                <div class="pie-form">
                    <button onclick="window.location.href='login.html'">Go Login</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
