<?php
/**
 * Sidebar de navegación de ejercicios
 * Carga los datos desde sidebar_data.php
 */

// Cargar datos de temas y ejercicios
$temasData = require __DIR__ . '/sidebar_data.php';

// Obtener la URL actual para marcar el ejercicio activo
$currentPath = $_SERVER['REQUEST_URI'];

// Calcular estadísticas
$totalTemas = count($temasData);
$totalEjercicios = 0;

foreach ($temasData as $tema) {
    $totalEjercicios += count($tema['ejercicios']);
}
?>

</head>

<body>
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <h2>📚 Índice de Ejercicios</h2>
               <button class="toggle-index-btn" onclick="toggleIndexCollapse()" title="Colapsar/Expandir índice">
                        <span class="toggle-index-icon">◀</span>
                    </button>
                    <button class="close-sidebar-btn" onclick="closeSidebar()">✕</button>
            <input type="text" class="search-box" id="searchBox" placeholder="Buscar ejercicios...">
            <div class="stats">
                <span id="statsText"><?php echo $totalTemas; ?> temas • <?php echo $totalEjercicios; ?> ejercicios</span>
            </div>
        </div>

        <div class="temas-container">
            <?php foreach ($temasData as $index => $temaInfo):
                $titulo = $temaInfo['titulo'];
                $ejercicios = $temaInfo['ejercicios'];
                $ejerciciosCount = count($ejercicios);

                // Verificar si algún ejercicio de este tema está activo
                $isActiveTema = false;
                foreach ($ejercicios as $ejercicio) {
                    $url = "/$titulo/$ejercicio";
                    if ($currentPath === $url || strpos($currentPath, $url . '/') === 0) {
                        $isActiveTema = true;
                        break;
                    }
                }

                // Solo el tema activo se expande por defecto
                $collapsedClass = $isActiveTema ? '' : 'collapsed';
            ?>
                <div class="tema" data-tema="tema-<?php echo $index; ?>">
                    <div class="tema-titulo <?php echo $collapsedClass; ?>" onclick="toggleTema(this)">
                        <span class="tema-nombre"><?php echo htmlspecialchars(ucfirst($titulo)); ?></span>
                        <span class="tema-count"><?php echo $ejerciciosCount; ?></span>
                    </div>

                    <div class="ejercicios <?php echo $collapsedClass; ?>">
                        <?php foreach ($ejercicios as $ejercicioName):
                            $url = "/$titulo/$ejercicioName";
                            $isActive = ($currentPath === $url || strpos($currentPath, $url . '/') === 0);
                            $activeClass = $isActive ? 'active' : '';
                            $ejercicioDisplay = ucfirst(str_replace('_', ' ', $ejercicioName));
                        ?>
                            <a href="<?php echo htmlspecialchars($url); ?>"
                               class="ejercicio-link <?php echo $activeClass; ?>"
                               data-search="<?php echo strtolower($ejercicioName . ' ' . $ejercicioDisplay); ?>">
                                <span class="ejercicio-icon">📝</span>
                                <span class="ejercicio-nombre"><?php echo htmlspecialchars($ejercicioDisplay); ?></span>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script>
        // Datos del sidebar
        const sidebarData = {
            totalTemas: <?php echo $totalTemas; ?>,
            totalEjercicios: <?php echo $totalEjercicios; ?>
        };
    </script>

</body>
