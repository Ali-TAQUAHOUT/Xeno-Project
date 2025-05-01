<?php
$host = 'localhost';          // or 127.0.0.1
$dbname = 'shop_db';          // your actual database name
$username = 'root';           // default for XAMPP
$password = '';               // default for XAMPP (empty)

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Optional: echo "Connected to shop_db successfully!";
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
