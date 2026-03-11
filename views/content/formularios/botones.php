<div class="form-actions">
    <button type="button" class="btn btn-success" id="btnResolver">▶️ Ejecutar</button>
    <button type="button" class="btn btn-error" onclick="clearForm()">🗑️ Limpiar</button>
    <button type="button" class="btn btn-info" onclick="rellenarAleatorio()">🎲 Aleatorio</button>
</div>

<script>
function rellenarAleatorio() {
    document.querySelectorAll('input[type="number"], input[type="text"]')
        .forEach(input => {
            input.value = Math.floor(Math.random() * 100) + 1;
        });
}
</script>