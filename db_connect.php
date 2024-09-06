<?php
$host = 'localhost'; 
$dbname = 'aqua';  
$username = 'root';  
$password = ''; 

try {
    // Połączenie z bazą danych
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Połączono z bazą danych!";
} catch (PDOException $e) {
    echo "Błąd połączenia: " . $e->getMessage();
}
?>
