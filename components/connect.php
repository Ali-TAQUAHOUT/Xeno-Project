<?php

$db_name = 'mysql:host=localhost;dbname=shop_db';
$user_name = 'root';
$user_password = '';

try {
    $conn = new PDO($db_name, $user_name, $user_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Optional debug line: echo "Connected to shop_db!";
 } catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
 }
?>