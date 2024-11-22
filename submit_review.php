<?php
// Conexión a la base de datos
$servername = "localhost"; // Cambia según tu entorno
$username = "administrator"; // Usuario de MySQL
$password = "1234"; // Contraseña de MySQL
$dbname = "review_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obtener datos del formulario
$name = $_POST["username"];
$rating = $_POST["rating"];
$comment = $_POST["comment"];

// Prevenir inyección SQL (muy importante)
$name = $conn->real_escape_string($name);
$comment = $conn->real_escape_string($comment);

// Insertar datos en la base de datos
$sql = "INSERT INTO reviews (username, rating, comment) VALUES ('$name', $rating, '$comment')";

if ($conn->query($sql) === TRUE) {
    echo "Review submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();

// Redirigir de vuelta a la página principal
header("Location: index.html");
exit;
?>
