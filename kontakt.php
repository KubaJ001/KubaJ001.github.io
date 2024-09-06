<?php
include 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt - AquaFun Park</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="top-bar">
            <div class="logo">
                <img src="logo.png" alt="Logo AquaFun Park">
                <h3>AquaFun Park</h3>
            </div>
            <nav class="main-nav">
                <ul>
                    <li><a href="index.php">Strona główna</a></li>
                    <li><a href="oferta.php">Oferta</a></li>
                    <li><a href="cennik.php">Cennik</a></li>
                    <li><a href="kontakt.php">Kontakt</a></li>
                    <li><a href="galeria.php">Galeria</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="contact">
        <div class="container">
            <h2>Kontakt z nami</h2>
            <form action="send_message.php" method="post">
                <label for="name">Imię i nazwisko:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Wiadomość:</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit">Wyślij</button>
            </form>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 AquaFun Park. Wszelkie prawa zastrzeżone.</p>
    </footer>
</body>
</html>
