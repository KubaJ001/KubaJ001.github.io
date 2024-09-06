<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Sprawdzenie poprawności danych
    if (empty($name) || empty($email) || empty($message)) {
        echo "Wszystkie pola są wymagane.";
        exit;
    }

    // Tutaj możesz dodać kod do wysyłania e-maila lub zapisywania wiadomości w bazie danych

    // Przykładowe wysłanie e-maila (może wymagać konfiguracji)
    $to = 'kontakt@aquafun.park';
    $subject = 'Nowa wiadomość od ' . $name;
    $body = "Imię: $name\nEmail: $email\nWiadomość:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Wiadomość została wysłana.";
    } else {
        echo "Wystąpił błąd podczas wysyłania wiadomości.";
    }
}
?>
