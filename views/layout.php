<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprende PHP con Ejercicios - Luis José Sánche</title>


    <link rel="stylesheet" href="<?= BASE_URL ?>build/css/app.css">
</head>

<body>
    <div class="sidebar-overlay" id="sidebarOverlay" onclick="closeSidebar()"></div>

    <header>
        <div class="container">
            <div class="header-content">
                <a href="/" class="logo">
                    <div>
                        <h1>📘 Aprende PHP con Ejercicios</h1>
                        <p class="subtitle">Autor: Luis José Sánchez</p>
                    </div>
                </a>

                <button class="toggle-menu-btn" onclick="toggleSidebar()">☰ Menú</button>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="main-grid">
            <?php include_once __DIR__ . '/sidebar/sidebar.php'; ?>
            <?php
            echo $contenido;
            ?>
        </div>
    </div>

    <footer>
        <p>📚 "Aprende PHP con Ejercicios" - Luis José Sánchez</p>
    </footer>

    <script src="<?= BASE_URL ?>build/js/bundle.js"></script>

    <script type="module" src="<?= BASE_URL ?>build/js/app/main.js"></script>




</body>

</html>