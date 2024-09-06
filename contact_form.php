<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    require 'db_connect.php';

    try {
        $sql = "INSERT INTO contact_form (name, email, message) VALUES (:name, :email, :message)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);
        $stmt->execute();
        echo "Twoja wiadomość została wysłana!";
    } catch (PDOException $e) {
        echo "Błąd: " . $e->getMessage();
    }
}
?>
