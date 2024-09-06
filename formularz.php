<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "kontakt@aquafun.park";
    $subject = "Wiadomość od: $name";
    $body = "Imię: $name\nEmail: $email\n\nWiadomość:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Twoja wiadomość została wysłana. Dziękujemy!</p>";
    } else {
        echo "<p>Wystąpił błąd podczas wysyłania wiadomości. Proszę spróbować ponownie później.</p>";
    }
}
?>
