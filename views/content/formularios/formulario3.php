        <div class="form-section">
            <h3 class="form-title">📋 Datos de Entrada</h3>
            <form id="exerciseForm">
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="input1"><?= $incluirFormulario['dato1'] ?></label>
                        <input
                            type="text"
                            id="input1"
                            name="campo1"
                            class="form-input"
                            placeholder="<?= $incluirFormulario['placeholder1'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="input2"><?= $incluirFormulario['dato2'] ?></label>
                        <input
                            type="text"
                            id="input2"
                            name="campo2"
                            class="form-input"
                            placeholder="<?= $incluirFormulario['placeholder2'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="input3"><?= $incluirFormulario['dato3'] ?></label>
                        <input
                            type="text"
                            id="input2"
                            name="campo3"
                            class="form-input"
                            placeholder="<?= $incluirFormulario['placeholder3'] ?>">
                    </div>
                </div>

                 <?php include_once __DIR__ . '/botones.php'; ?>
            </form>
        </div>