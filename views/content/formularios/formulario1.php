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
                </div>

                <?php include_once __DIR__ . '/botones.php'; ?>
            </form>
        </div>