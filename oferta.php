<?php
include 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oferta - AquaFun Park</title>
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

    <section class="offer">
        <div class="container">
            <h2>Nasza Oferta</h2>
            <div class="offer-items">
                <?php
                $result = $conn->query("SELECT * FROM offer");
                while($row = $result->fetch_assoc()) {
                    echo '<div class="offer-item">
                            <img src="' . $row['image'] . '" alt="' . $row['name'] . '">
                            <h3>' . $row['name'] . '</h3>
                            <p>' . $row['description'] . '</p>
                          </div>';
                }
                ?>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 AquaFun Park. Wszelkie prawa zastrzeżone.</p>
    </footer>
</body>
</html>
