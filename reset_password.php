<?php
// Database connection details
$servername = "localhost";
$username = "administrator";
$password = "1234";
$dbname = "users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}

// Get the username or email sent from the form
$username_or_email = $_POST['username_or_email'];

// Check if the email or username exists in the database
$sql = "SELECT * FROM users WHERE email = '$username_or_email' OR username = '$username_or_email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Generate a new random password
    $new_password = generateRandomPassword();

    // Hash the new password
    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

    $update_sql = "UPDATE users SET password_hash = '$hashed_password' WHERE email = '$username_or_email' OR username = '$username_or_email'";

    } else {
        echo "Error resetting password: " . $conn->error;
    }
} else {
    echo "No user found with the provided email or username.";
}

// Close connection
$conn->close();

// Redirect to login page
header("Location: logins.html");
exit();

// Function to generate a random password
function generateRandomPassword() {
    $length = 10;
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
?>






