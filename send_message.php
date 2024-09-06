<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "kontakt@aquafunpark.pl";
    $subject = "Nowa wiadomość od $name";
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    $email_body = "Imię i nazwisko: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Wiadomość:\n$message";

    if (mail($to, $subject, $email_body, $headers)) {
        echo "Wiadomość została wysłana.";
    } else {
        echo "Wystąpił problem z wysłaniem wiadomości.";
    }
} else {
    echo "Nieprawidłowe żądanie.";
}
?>
