<main class="content-area" id="content-area">

    <?php include_once __DIR__ . '/../contentTemplates/descripcion/descripcion.php'; ?>

    <?php
    // Si existe una variable $incluirFormulario = true, incluimos el formulario
    if (!empty($incluirFormulario)) {
        include_once __DIR__ . '/../contentTemplates/formularios/formulario.php';
    }
    ?>

    <?php include_once __DIR__ . '/../contentTemplates/resultados/resultados.php'; ?>

    <?php include_once __DIR__ . '/../contentTemplates/ver/verCodigoPHP.php'; ?>
    <?php include_once __DIR__ . '/../contentTemplates/ver/verCodigoJS.php'; ?>
    <?php include_once __DIR__ . '/../contentTemplates/ver/verDiagrama.php'; ?>

</main>