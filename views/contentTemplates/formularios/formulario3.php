        <div class="form-section">
                    <h3 class="form-title">📋 Datos de Entrada</h3>
                    <form id="exerciseForm" onsubmit="return handleSubmit(event)">
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label" for="input1"><?= $incluirFormulario['dato1'] ?></label>
                                <input type="text" id="input1" class="form-input" placeholder="<?= $incluirFormulario['placeholder1'] ?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="input2"><?= $incluirFormulario['dato2'] ?></label>
                                <input type="text" id="input2" class="form-input" placeholder="<?= $incluirFormulario['placeholder2'] ?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="input3"><?= $incluirFormulario['dato3'] ?></label>
                                <input type="text" id="input2" class="form-input" placeholder="<?= $incluirFormulario['placeholder3'] ?>">
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">▶️ Ejecutar</button>
                            <button type="button" class="btn btn-error" onclick="clearForm()">🗑️ Limpiar</button>
                        </div>
                    </form>
                </div>