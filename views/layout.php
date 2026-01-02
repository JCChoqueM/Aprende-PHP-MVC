<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprende PHP con Ejercicios - Luis José Sánchez</title>
    
    <!-- ========== CSS MODULES ========== -->
    <!-- ORDEN DE IMPORTACIÓN IMPORTANTE: variables → base → layout → especializados -->
    
    <!-- 1. Variables CSS (Raíz)
         📁 assets/css/variables.css (38 líneas)
         ├─ Define: --primary, --secondary, --success, --warning, --error
         ├─ Colores, espacios, tipografía
         └─ Usado por: TODOS los demás CSS -->
    <link rel="stylesheet" href="assets/css/variables.css">
    
    <!-- 2. Reset y Estilos Base
         📁 assets/css/base.css (79 líneas)
         ├─ Reset universal
         ├─ Body, container, typography
         ├─ Footer
         └─ Depende de: variables.css -->
    <link rel="stylesheet" href="assets/css/base.css">
    
    <!-- 3. Layout Principal (Header + Grid)
         📁 assets/css/layout.css (142 líneas)
         ├─ Header styling
         ├─ .main-grid (2 columnas: sidebar + content)
         ├─ Animaciones: slideInDown, fadeInUp
         ├─ Media queries responsive
         └─ Depende de: variables.css -->
    <link rel="stylesheet" href="assets/css/layout.css">
    
    <!-- 4. Sidebar (Navegación)
         📁 assets/css/sidebar.css (307 líneas)
         ├─ .sidebar (sticky desktop, overlay móvil)
         ├─ .chapter-accordion (acordeón expandible)
         ├─ .exercises-list (lista de ejercicios)
         ├─ Animaciones: slideRight, transitions
         └─ Depende de: variables.css, layout.css -->
    <link rel="stylesheet" href="assets/css/sidebar.css">
    
    <!-- 5. Ejercicios (Títulos y Badges)
         📁 assets/css/exercises.css (86 líneas)
         ├─ .exercise-title (cian)
         ├─ .badge-chapter (azul), .badge-difficulty (naranja)
         ├─ .exercise-description
         └─ Depende de: variables.css -->
    <link rel="stylesheet" href="assets/css/exercises.css">
    
    <!-- 6. Formularios (Inputs y Botones)
         📁 assets/css/forms.css (177 líneas)
         ├─ .form-input, .form-textarea (focus azul)
         ├─ .btn (primary, success, error)
         ├─ .form-actions
         └─ Depende de: variables.css -->
    <link rel="stylesheet" href="assets/css/forms.css">
    
    <!-- 7. Componentes Avanzados
         📁 assets/css/components.css (448 líneas)
         ├─ .solution-box (resultados)
         ├─ .collapsible-section (acordeones)
         ├─ .code-container (código con copy button)
         ├─ .syntax-* (syntax highlighting)
         ├─ Animaciones: collapseOpen, collapseClose
         └─ Depende de: variables.css, layout.css -->
    <link rel="stylesheet" href="assets/css/components.css">
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

            <main class="content-area">
                <div class="exercise-header">
                    <h2 class="exercise-title" id="exerciseTitle">Selecciona un ejercicio</h2>
                    <div class="exercise-meta">
                        <span class="badge badge-chapter" id="chapterBadge">Capítulo 1</span>
                        <span class="badge badge-difficulty" id="difficultyBadge">Fácil</span>
                    </div>
                </div>

                <div class="exercise-description" id="exerciseDescription">
                    <p><strong>📝 Descripción:</strong></p>
                    <p>Selecciona un ejercicio del menú para comenzar. Ingresa los datos, ejecuta y compara las soluciones en PHP y JavaScript.</p>
                </div>

                <div class="form-section">
                    <h3 class="form-title">📋 Datos de Entrada</h3>
                    <form id="exerciseForm" onsubmit="return handleSubmit(event)">
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label" for="input1">Dato 1:</label>
                                <input type="text" id="input1" class="form-input" placeholder="Ingresa un valor">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="input2">Dato 2:</label>
                                <input type="text" id="input2" class="form-input" placeholder="Ingresa un valor">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="input3">Dato adicional:</label>
                            <textarea id="input3" class="form-textarea" placeholder="Información adicional (opcional)"></textarea>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">▶️ Ejecutar</button>
                            <button type="button" class="btn btn-error" onclick="clearForm()">🗑️ Limpiar</button>
                        </div>
                    </form>
                </div>

                <div class="solution-section" id="solutionSection">
                    <h3 class="solution-title">✅ Resultados</h3>
                    <div class="solution-grid">
                        <div class="solution-box">
                            <div class="solution-box-title">🐘 PHP</div>
                            <div class="solution-result" id="phpResult">Esperando ejecución...</div>
                        </div>
                        <div class="solution-box">
                            <div class="solution-box-title">⚡ JavaScript</div>
                            <div class="solution-result" id="jsResult">Esperando ejecución...</div>
                        </div>
                    </div>
                </div>

                <div class="collapsible-section">
                    <div class="collapsible-header" onclick="toggleCollapsible(this)">
                        <span class="collapsible-title">💻 Ver Código PHP</span>
                        <span class="collapsible-icon">▼</span>
                    </div>
                    <div class="collapsible-content">
                        <div class="code-container">
                            <div class="code-header">
                                <span class="code-lang">PHP</span>
                                <div class="code-actions">
                                    <button class="copy-btn" onclick="copyCode('phpCode', event)" title="Copiar código">📋 Copiar</button>
                                </div>
                            </div>
                            <div class="code-wrapper">
                                <pre><code id="phpCode"><span class="syntax-comment">// Código PHP</span>
<span class="syntax-keyword">&lt;?php</span>
<span class="syntax-variable">$dato1</span> = <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'dato1'</span>];
<span class="syntax-variable">$dato2</span> = <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'dato2'</span>];
<span class="syntax-keyword">?&gt;</span></code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapsible-section">
                    <div class="collapsible-header" onclick="toggleCollapsible(this)">
                        <span class="collapsible-title">⚡ Ver Código JavaScript</span>
                        <span class="collapsible-icon">▼</span>
                    </div>
                    <div class="collapsible-content">
                        <div class="code-container">
                            <div class="code-header">
                                <span class="code-lang">JavaScript</span>
                                <div class="code-actions">
                                    <button class="copy-btn" onclick="copyCode('jsCode', event)" title="Copiar código">📋 Copiar</button>
                                </div>
                            </div>
                            <div class="code-wrapper">
                                <pre><code id="jsCode"><span class="syntax-comment">// Código JavaScript</span>
<span class="syntax-keyword">function</span> <span class="syntax-function">resolver</span>(<span class="syntax-variable">dato1</span>, <span class="syntax-variable">dato2</span>) {
    <span class="syntax-keyword">return</span> resultado;
}</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapsible-section">
                    <div class="collapsible-header" onclick="toggleCollapsible(this)">
                        <span class="collapsible-title">📊 Ver Diagrama</span>
                        <span class="collapsible-icon">▼</span>
                    </div>
                    <div class="collapsible-content">
                        <div class="diagram-container">
                            <div class="diagram-header">
                                <span class="diagram-title">Diagrama de Flujo</span>
                                <button class="diagram-expand-btn" title="Expandir diagrama">🔍 Expandir</button>
                            </div>
                            <div class="diagram-content">
                                <div class="diagram-wrapper">
                                    <div class="diagram-placeholder">
                                        🖼️ Espacio para diagrama de flujo
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <footer>
        <p>📚 "Aprende PHP con Ejercicios" - Luis José Sánchez</p>
    </footer>

    <script type="module">
        // Importar funciones necesarias de los módulos
        import {
            toggleSidebar,
            closeSidebar,
            toggleIndexCollapse
        } from './assets/js/sidebar.js';
        import {
            toggleCollapsible,
            handleSubmit,
            clearForm
        } from './assets/js/ui.js';
        import {
            copyCode
        } from './assets/js/utils.js';
        import {
            generateChapters
        } from './assets/js/exercises.js';
        import {
            initSidebarEvents
        } from './assets/js/sidebar.js';
        import {
            initUIEvents
        } from './assets/js/ui.js';
        import {
            initSmoothScroll
        } from './assets/js/utils.js';

        // Exportar al objeto global para uso en HTML inline handlers
        window.toggleSidebar = toggleSidebar;
        window.closeSidebar = closeSidebar;
        window.toggleIndexCollapse = toggleIndexCollapse;
        window.toggleCollapsible = toggleCollapsible;
        window.handleSubmit = handleSubmit;
        window.clearForm = clearForm;
        window.copyCode = copyCode;

        // Ejecutar la inicialización cuando el DOM esté listo
        if (document.readyState === 'loading') {
            // DOM aún se está cargando
            document.addEventListener('DOMContentLoaded', () => {
                generateChapters();
                initSidebarEvents();
                initUIEvents();
                initSmoothScroll();
                console.log('✅ Aplicación inicializada correctamente');
            });
        } else {
            // DOM ya está completamente cargado
            generateChapters();
            initSidebarEvents();
            initUIEvents();
            initSmoothScroll();
            console.log('✅ Aplicación inicializada correctamente');
        }
    </script>
</body>

</html>