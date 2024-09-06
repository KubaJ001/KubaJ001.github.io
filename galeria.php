<?php
include 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria - AquaFun Park</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
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

    <section class="gallery">
        <div class="container">
            <h2>Galeria</h2>
            <div class="gallery-items">
                <?php
                $result = $conn->query("SELECT * FROM gallery");
                while($row = $result->fetch_assoc()) {
                    echo '<a href="' . $row['image_path'] . '" data-lightbox="mygallery">
                            <img src="' . $row['image_path'] . '" alt="' . $row['alt_text'] . '">
                          </a>';
                }
                ?>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 AquaFun Park. Wszelkie prawa zastrzeżone.</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
</body>
</html>
