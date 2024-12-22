

<?php
// Database configuration
$host = 'localhost';
$dbname = 'Bolam';
$username = 'root';
$password = '';

try {
    // Create a PDO instance (connect to the database)
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    // Set PDO error mode to exception for better error handling
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // If there is an error, display it
    die("Connection failed: " . $e->getMessage());
}
?>
