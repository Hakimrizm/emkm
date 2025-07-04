<?php
$host = 'localhost';
$dbname = 'emkm'; // Ganti sesuai nama database kamu
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; // hanya untuk testing
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
