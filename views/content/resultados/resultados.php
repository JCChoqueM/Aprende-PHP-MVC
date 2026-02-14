<div class="solution-section" id="solutionSection">
    <h3 class="solution-title">✅ Resultados</h3>
    <div class="solution-grid">
        <div class="solution-box">
           
            <div class="solution-result" id="phpResult">
                <?php if (!empty($resultado)) : ?>
                    <?= $resultado->render() ?>
                <?php endif; ?>
            </div>
        </div>

        <!-- <div class="solution-box">
            <div class="solution-box-title">⚡ JavaScript</div>
            <div class="solution-result" id="jsResult"></div>
        </div> -->
    </div>
</div>