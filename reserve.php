<?php
// Configuración para permitir solicitudes desde otros orígenes y para enviar respuestas en JSON
header('Access-Control-Allow-Origin: *'); 
header('Content-Type', 'application/json'); 

// Conexión a la base de datos (asegúrate de configurar correctamente las credenciales)
$host = 'localhost'; // Dirección del servidor de la base de datos
$user = 'administrator'; // Usuario de la base de datos
$password = '1234'; // Contraseña de la base de datos
$dbname = 'reservations_db'; // Nombre de la base de datos

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    echo json_encode(['success' => false, 'error' => 'Database connection failed']);
    exit;
}

// Obtener datos del cliente
$data = json_decode(file_get_contents('php://input'), true);

if (!isset($data['name']) || !isset($data['email']) || !isset($data['product']) || !isset($data['paymentMethod'])) {
    echo json_encode(['success' => false, 'error' => 'Missing required fields']);
    exit;
}

$name = $data['name'];
$email = $data['email'];
$product = $data['product'];
$paymentMethod = $data['paymentMethod'];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'error' => 'Invalid email address']);
    exit;
}

if ($paymentMethod === 'credit-card') {
    if (!isset($data['cardNumber']) || !isset($data['expirationDate']) || !isset($data['cvv'])) {
        echo json_encode(['success' => false, 'error' => 'Missing credit card details']);
        exit;
    }
    // Nota: En producción, no deberías almacenar información de tarjetas de crédito sin cumplir con estándares de seguridad como PCI DSS.
    $cardNumber = $data['cardNumber'];
    $expirationDate = $data['expirationDate'];
    $cvv = $data['cvv'];
} elseif ($paymentMethod === 'paypal') {
    if (!isset($data['paypalEmail']) || !filter_var($data['paypalEmail'], FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'error' => 'Invalid PayPal email']);
        exit;
    }
    $paypalEmail = $data['paypalEmail'];
}

// Insertar datos en la base de datos
$stmt = $conn->prepare("INSERT INTO reservations (name, email, product, payment_method, card_number, expiration_date, cvv, paypal_email) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssss", $name, $email, $product, $paymentMethod, $cardNumber, $expirationDate, $cvv, $paypalEmail);

if ($stmt->execute()) {
    echo json_encode(['success' => true]); // Respuesta de éxito
} else {
    echo json_encode(['success' => false, 'error' => 'Failed to insert data']);
}

$stmt->close();
$conn->close();
?>
