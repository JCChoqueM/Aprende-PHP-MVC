/* ==========================================
   FUNCIONES DE UTILIDAD
   ========================================== */

/**
 * Calcula el factorial de forma recursiva
 * @param {number} n - Número para calcular factorial
 * @returns {number} Resultado del factorial
 */
function calculateFactorialJS(n) {
    if (n === 0 || n === 1) return 1;
    return n * calculateFactorialJS(n - 1);
}

/**
 * Formatea un número con separadores locales
 * @param {number} number - Número a formatear
 * @returns {string} Número formateado
 */
function formatNumber(number) {
    return number.toLocaleString('es-ES');
}

/* ==========================================
   NAVEGACIÓN
   ========================================== */

function toggleNav() {
    const nav = document.getElementById('nav');
    const navText = document.getElementById('nav-text');

    nav.classList.toggle('collapsed');
    navText.classList.toggle('hidden');
}

/* ==========================================
   DIAGRAMA
   ========================================== */

function toggleDiagram() {
    const diagram = document.getElementById('diagram');
    const icon = document.getElementById('diagramIcon');

    diagram.classList.toggle('visible');
    icon.classList.toggle('rotated');
}

/* ==========================================
   CÁLCULO DE FACTORIAL
   ========================================== */

function calculateFactorial() {
    const input = document.getElementById('inputNumber');
    const phpResult = document.getElementById('phpResult');
    const jsResult = document.getElementById('jsResult');
    const errorMsg = document.getElementById('errorMsg');
    const form = document.getElementById('calculateForm');

    const num = parseInt(input.value);
    const maxValue = 20;

    // Validación
    if (input.value === '' || isNaN(num) || num < 0 || num > maxValue) {
        errorMsg.classList.remove('hidden');
        phpResult.textContent = '—';
        jsResult.textContent = '—';
        return;
    }

    errorMsg.classList.add('hidden');

    // Calcular en JavaScript
    const result = calculateFactorialJS(num);
    jsResult.textContent = formatNumber(result);

    // Enviar al servidor para calcular en PHP sin recargar la página
    fetch('calculate.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'number=' + encodeURIComponent(num)
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                phpResult.textContent = formatNumber(data.result);
            } else {
                phpResult.textContent = '—';
                errorMsg.classList.remove('hidden');
                const textEl = errorMsg.querySelector('.error-text');
                if (textEl) textEl.textContent = data.message || 'Error del servidor';
            }
        })
        .catch(err => {
            phpResult.textContent = '—';
            errorMsg.classList.remove('hidden');
            const textEl = errorMsg.querySelector('.error-text');
            if (textEl) textEl.textContent = 'Error de red';
            console.error(err);
        });
}

function handleKeyPress(event) {
    if (event.key === 'Enter') {
        event.preventDefault();
        calculateFactorial();
    }
}

/* ==========================================
   INICIALIZACIÓN
   ========================================== */

document.addEventListener('DOMContentLoaded', function () {
    // Agregar listeners a elementos
    const inputNumber = document.getElementById('inputNumber');
    if (inputNumber) {
        inputNumber.addEventListener('keypress', handleKeyPress);
    }
});
