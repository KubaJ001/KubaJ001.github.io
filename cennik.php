<?php
include 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cennik - AquaFun Park</title>
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

    <section class="pricing">
        <div class="container">
            <h2>Nasz Cennik</h2>
            <table>
                <thead>
                    <tr>
                        <th>Usługa</th>
                        <th>Cena</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = $conn->query("SELECT * FROM pricing");
                    while($row = $result->fetch_assoc()) {
                        echo '<tr>
                                <td>' . $row['service'] . '</td>
                                <td>' . $row['price'] . ' PLN</td>
                              </tr>';
                    }
                    ?>
                </tbody>
                </table>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 AquaFun Park. Wszelkie prawa zastrzeżone.</p>
    </footer>
</body>
</html>
