<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "administrator";
$password = "1234";
$dbname = "review_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obtener todas las reseñas
$sql = "SELECT * FROM reviews ORDER BY date DESC";
$result = $conn->query($sql);

$reviews = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $reviews[] = $row;
    }
}

echo json_encode($reviews); // Devolver como JSON

$conn->close();
?>
