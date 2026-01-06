<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprende PHP con Ejercicios - Luis José Sánchez</title>


    <link rel="stylesheet" href="../build/css/app.css">
</head>

<body>
    <div class="sidebar-overlay" id="sidebarOverlay" onclick="closeSidebar()"></div>

    <header>
        <div class="container">
            <div class="header-content">
                <div>
                    <h1>📘 Aprende PHP con Ejercicios</h1>
                    <p class="subtitle">Autor: Luis José Sánchez</p>
                </div>
                <button class="toggle-menu-btn" onclick="toggleSidebar()">☰ Menú</button>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="main-grid">
            <aside class="sidebar" id="sidebar">
                <div class="sidebar-header">
                    <h3>📚 Índice</h3>
                    <button class="toggle-index-btn" onclick="toggleIndexCollapse()" title="Colapsar/Expandir índice">
                        <span class="toggle-index-icon">◀</span>
                    </button>
                    <button class="close-sidebar-btn" onclick="closeSidebar()">✕</button>
                </div>
                <ul class="chapter-accordion" id="chapterAccordion"></ul>
            </aside>
            <?php
            echo $contenido;
            ?>

        </div>
    </div>

    <footer>
        <p>📚 "Aprende PHP con Ejercicios" - Luis José Sánchez</p>
    </footer>

    <script src="../build/js/bundle.js"></script>
</body>

</html>