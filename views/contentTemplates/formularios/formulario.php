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