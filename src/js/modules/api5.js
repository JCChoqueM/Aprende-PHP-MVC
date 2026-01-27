// ============================================
// INICIO DE LA APLICACIÓN
// ============================================

// Esperar a que cargue el DOM antes de ejecutar
document.addEventListener("DOMContentLoaded", iniciarAplicacion);

// ============================================
// FUNCIÓN PRINCIPAL
// ============================================

function iniciarAplicacion() {
    // Obtener elementos del DOM
    const formulario = document.getElementById("exerciseForm");
    const botonResolver = document.getElementById("btnResolver");
    
    // Si no existe el formulario, salir
    if (!formulario) {
        console.warn("No se encontró el formulario");
        return;
    }

    // Obtener parámetros de la URL (tema y ejercicio)
    const parametrosRuta = obtenerParametrosDeURL();
    
    if (!parametrosRuta) {
        console.warn("No se pudieron obtener los parámetros de la URL");
        return;
    }

    // Configurar el comportamiento del formulario
    const controlador = configurarFormulario(formulario, parametrosRuta);

    // Eventos:
    // 1. Enviar automáticamente después de 4 segundos sin escribir
    formulario.addEventListener("input", controlador.enviarConRetraso);
    
    // 2. Enviar inmediatamente al hacer click en "Resolver"
    if (botonResolver) {
        botonResolver.addEventListener("click", controlador.enviarAhora);
    }
}

// ============================================
// CONFIGURACIÓN DEL FORMULARIO
// ============================================

function configurarFormulario(formulario, parametrosRuta) {
    let temporizador = null;

    // Función para enviar el formulario al servidor
    async function enviarAhora() {
        try {
            // Enviar datos al backend
            const respuesta = await enviarEjercicioAlServidor(parametrosRuta, formulario);
            
            // Mostrar resultado en pantalla
            mostrarResultado(respuesta);
            
        } catch (error) {
            console.error("Error al enviar el ejercicio:", error);
            mostrarResultado({ mensaje: "Error al procesar el ejercicio" });
        }
    }

    // Función que espera 4 segundos antes de enviar (debounce)
    function enviarConRetraso() {
        // Cancelar envío anterior si el usuario sigue escribiendo
        clearTimeout(temporizador);
        
        // Programar nuevo envío en 4 segundos
        temporizador = setTimeout(enviarAhora, 4000);
    }

    // Retornar funciones públicas
    return {
        enviarAhora,
        enviarConRetraso
    };
}

// ============================================
// COMUNICACIÓN CON EL SERVIDOR (API)
// ============================================

async function enviarEjercicioAlServidor(parametrosRuta, formulario) {
    const { tema, ejercicio } = parametrosRuta;
    
    // Construir URL del endpoint
    const url = `/api/tema${tema}/ejercicio${ejercicio}`;
    
    // Enviar petición POST con los datos del formulario
    const respuesta = await fetch(url, {
        method: "POST",
        body: new FormData(formulario)
    });

    // Verificar si la petición fue exitosa
    if (!respuesta.ok) {
        throw new Error(`Error HTTP: ${respuesta.status}`);
    }

    // Convertir respuesta a JSON y retornarla
    return await respuesta.json();
}

// ============================================
// OBTENER PARÁMETROS DE LA URL
// ============================================

function obtenerParametrosDeURL() {
    // Buscar patrón: /tema1/ejercicio2
    const patron = /tema(\d+)\/ejercicio(\d+)/;
    const coincidencia = window.location.pathname.match(patron);
    
    // Si encuentra el patrón, retornar objeto con tema y ejercicio
    if (coincidencia) {
        return {
            tema: Number(coincidencia[1]),      // Convertir a número
            ejercicio: Number(coincidencia[2])  // Convertir a número
        };
    }
    
    // Si no encuentra el patrón, retornar null
    return null;
}

// ============================================
// MOSTRAR RESULTADO EN PANTALLA
// ============================================

function mostrarResultado(respuesta) {
    const elementoResultado = document.getElementById("jsResult");
    
    if (!elementoResultado) {
        console.warn("No se encontró el elemento para mostrar resultados");
        return;
    }

    // Mostrar mensaje o texto por defecto
    const mensaje = respuesta.mensaje || "Sin respuesta del servidor";
    elementoResultado.textContent = mensaje;
}

// ============================================
// EJEMPLO DE USO
// ============================================

/*
HTML esperado:

<form id="exerciseForm">
    <input type="text" name="respuesta" placeholder="Tu respuesta">
    <button type="button" id="btnResolver">Resolver</button>
</form>

<div id="jsResult"></div>

URL esperada:
http://tudominio.com/tema1/ejercicio3
*/