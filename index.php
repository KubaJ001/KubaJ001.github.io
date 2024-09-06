<?php
include 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona główna - AquaFun Park</title>
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

    <section class="hero">
        <div class="hero-content">
            <h1>Odkryj relaks i komfort w AquaFun Park</h1>
            <p>Zapraszamy do AquaFun Park - oazy spokoju i wypoczynku.</p>
            <a href="oferta.php" class="btn-main">Dowiedz się więcej</a>
        </div>
    </section>

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

    <script>
        window.onscroll = function() {
            var header = document.querySelector('header');
            var sticky = header.offsetTop;

            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        };

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
