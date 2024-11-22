<?php
// Conexión a la base de datos
$servername = "localhost"; // Nombre del servidor
$username = "administrator"; // Usuario de MySQL
$password = "1234"; // Contraseña de MySQL
$database = "contact_db"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obtener datos del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Insertar en la tabla 'contact'
$sql = "INSERT INTO contact (name, email, subject, phone, message) 
        VALUES ('$name', '$email', '$subject', '$phone', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Thank you for your message!"; // Mensaje de éxito
} else {
    echo "Error: " . $sql . "<br>" . $conn->error; // Mensaje de error
}

// Cerrar conexión
$conn->close();
?>
