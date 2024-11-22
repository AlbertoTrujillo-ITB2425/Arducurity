<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $servername = "localhost";
    $username = "administrator";
    $password = "1234";
    $database = "users";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Error connecting to the database: " . mysqli_connect_error());
    }

    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $user = $_POST["username"];
        $pass = $_POST["password"];

        $query = "SELECT id, password_hash FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "s", $user);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            $stored_hash = $row["password_hash"];

            if (password_verify($pass, $stored_hash)) {
                $_SESSION['username'] = $user;
                header("Location: welcome.php");
                exit();
            } else {
                $message = "Incorrect password";
            }
        } else {
            $message = "Username not found";
        }
        mysqli_stmt_close($stmt);
    } else {
        $message = "Missing login credentials";
    }

    mysqli_close($conn);
}
header("Location: login.html?error=" . urlencode($message));
?>
