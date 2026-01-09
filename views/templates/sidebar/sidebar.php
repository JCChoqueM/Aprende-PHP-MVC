<?php
// sidebar.php

// Directorio base: views/ (un nivel arriba de sidebar/)
$baseDir = dirname(__DIR__, 2);

// Archivo de caché
$cacheFile = __DIR__ . '/cache_indice.json';
$cacheTime = 3600; // 1 hora

// Obtener la URL actual para marcar el ejercicio activo
$currentPath = $_SERVER['REQUEST_URI'];

$temasData = null;
$cacheAge = 0;

// Verificar si existe caché válido
if (file_exists($cacheFile) && (time() - filemtime($cacheFile)) < $cacheTime) {
    $temasData = json_decode(file_get_contents($cacheFile), true);
    $cacheAge = time() - filemtime($cacheFile);
}

// Si no hay caché o está vencido, escanear directorios
if ($temasData === null) {
    $temasData = [];
    $temas = array_filter(glob($baseDir . '/*'), 'is_dir');
    sort($temas);

    foreach ($temas as $tema) {
        $temaName = basename($tema);

        // Solo carpetas que empiecen con "tema"
        if (strpos($temaName, 'tema') !== 0) {
            continue;
        }

        // Buscar archivos PHP en el tema
        $ejercicios = glob($tema . '/*.php');
        sort($ejercicios);

        $ejerciciosArray = [];
        foreach ($ejercicios as $ejercicio) {
            $ejerciciosArray[] = basename($ejercicio, '.php');
        }

        $temasData[$temaName] = $ejerciciosArray;
    }

    // Guardar en caché
    file_put_contents($cacheFile, json_encode($temasData, JSON_PRETTY_PRINT));
    $cacheAge = 0;
}

// Calcular estadísticas
$totalTemas = count($temasData);
$totalEjercicios = array_sum(array_map('count', $temasData));

// Manejar refresh de caché
if (isset($_GET['refresh_cache']) && file_exists($cacheFile)) {
    unlink($cacheFile);
    header('Location: ' . strtok($_SERVER['REQUEST_URI'], '?'));
    exit;
}
?>

</head>

<body>
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <h2>📚 Índice de Ejercicios</h2>
            <input type="text" class="search-box" id="searchBox" placeholder="Buscar ejercicios...">
            <div class="stats">
                <span id="statsText">Cargando...</span>
            </div>
            <div class="cache-info">
                <span id="cacheTime">Caché: calculando...</span>
                <button class="cache-refresh" onclick="refreshCache()">🔄</button>
            </div>
        </div>

        <?php
        // Generar HTML del menú (todos los ejercicios precargados)
        foreach ($temasData as $temaName => $ejercicios) {
            $ejerciciosCount = count($ejercicios);
            $isActiveTema = strpos($currentPath, "/$temaName/") !== false;
            $collapsedClass = $isActiveTema ? '' : 'collapsed';

            echo '<div class="tema">';
            echo '<div class="tema-titulo ' . $collapsedClass . '" onclick="toggleTema(this)">';
            echo '<span>' . ucfirst(str_replace('_', ' ', $temaName)) . '</span>';
            echo '<span class="tema-count">' . $ejerciciosCount . '</span>';
            echo '</div>';
            echo '<div class="ejercicios ' . $collapsedClass . '">';

            foreach ($ejercicios as $ejercicioName) {
                $url = "/$temaName/$ejercicioName";
                $activeClass = (strpos($currentPath, $url) !== false) ? 'active' : '';

                echo '<a href="' . htmlspecialchars($url) . '" class="ejercicio-link ' . $activeClass . '" data-search="' . strtolower($ejercicioName) . '">';
                echo '📝 ' . ucfirst(str_replace('_', ' ', $ejercicioName));
                echo '</a>';
            }

            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>

    <script>
        // Pasar datos de PHP a JavaScript
        const sidebarData = {
            totalTemas: <?php echo $totalTemas; ?>,
            totalEjercicios: <?php echo $totalEjercicios; ?>,
            cacheAge: <?php echo $cacheAge; ?>
        };
    </script>


</body>