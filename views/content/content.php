<main class="content-area" id="content-area">

    <?php include_once __DIR__ . '/descripcion/descripcion.php'; ?>

    <?php
    // Si existe una variable $incluirFormulario = true, incluimos el formulario
    if (!empty($incluirFormulario['formulario'])) {
        include_once __DIR__ . '/formularios/' . ($incluirFormulario['nombreFormulario']) . '.php';
    }
    ?>

    <?php include_once __DIR__ . '/resultados/resultados.php'; ?>

    <?php include_once __DIR__ . '/ver/verCodigoPHP.php'; ?>
    <?php include_once __DIR__ . '/ver/verCodigoJS.php'; ?>
    <?php include_once __DIR__ . '/ver/verDiagrama.php'; ?>

</main>