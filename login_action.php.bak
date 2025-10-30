<?php
$servername = "localhost";
$username = "root";
$password = "Aditya@123";
$dbname = "transport_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// FIX: get phone input correctly
$phone = $_POST['phone'];
$password = $_POST['password'];
$role = $_POST['role'];

// Select correct table
$table = ($role == "user") ? "users" : "conductors";

// FIX: use phone instead of mobile
$sql = "SELECT * FROM $table WHERE phone='$phone' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    if ($role == "user") {
        header("Location: userpage.php");
        exit();
    } else {
        header("Location: conducterpage.php");
        exit();
    }
} else {
    echo "Invalid Phone or Password <br>";
    echo "<a href='login.php'>Try Again</a>";
}

$conn->close();
?>
