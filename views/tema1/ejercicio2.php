            <main class="content-area">
                <?php include_once __DIR__ . '/../templates/descripcion.php'; ?>

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


                <?php include_once __DIR__ . '/../templates/ver/verCodigoPHP.php'; ?>
                <?php include_once __DIR__ . '/../templates/ver/verCodigoJS.php'; ?>
                <?php include_once __DIR__ . '/../templates/ver/verDiagrama.php'; ?>



            </main>