<?php
// header.php
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AltSource Software — Soluções Tecnológicas</title>
    <meta name="description" content="Automatize processos e aumente a produtividade com a AltSource Software." />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <!-- Scroll Reveal Library for complex effects -->
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body>

    <!-- =============== HEADER =============== -->
    <header class="header" id="header">
        <div class="container header-container">
            <a href="index.php" class="brand">
                <img src="assets/logo.jpg" alt="AltSource Software" class="brand-logo" />
            </a>
            <nav class="nav" id="nav">
                <!-- Links now point to independent pages -->
                <a href="index.php" class="nav-link">Home</a>
                <a href="sobre.php" class="nav-link">Sobre</a>
                <a href="portfolio.php" class="nav-link">Portfólio</a>
                <a href="contactos.php" class="nav-cta btn-glow">Fale Connosco</a>
            </nav>
            <button class="nav-toggle" id="navToggle" aria-label="Menu">
                <span></span><span></span><span></span>
            </button>
        </div>
    </header>
