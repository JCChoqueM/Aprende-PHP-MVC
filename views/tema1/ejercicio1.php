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