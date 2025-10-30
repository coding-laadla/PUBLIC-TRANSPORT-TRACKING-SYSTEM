<?php
$servername = "localhost";
$username = "root";   // default for XAMPP
$password = "Aditya@123";       // default for XAMPP
$dbname = "transport_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$phone = $_POST['phone'];
$pass = password_hash($_POST['password'], PASSWORD_DEFAULT); // hashed password
$role = $_POST['role'];

if ($role == "user") {
    $sql = "INSERT INTO users (name, phone, password) VALUES ('$name', '$phone', '$pass')";
} else {
    $sql = "INSERT INTO conductors (name, phone, password) VALUES ('$name', '$phone', '$pass')";
}

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Registration successful!'); window.location='login.php';</script>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
