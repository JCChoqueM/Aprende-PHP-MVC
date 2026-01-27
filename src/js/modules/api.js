// ============================================
// src/js/api.js
// Comunicación con el servidor
// ============================================

export async function enviarEjercicio(parametrosRuta, formulario) {
    const { tema, ejercicio } = parametrosRuta;
    const url = `/api/tema${tema}/ejercicio${ejercicio}`;
    
    const response = await fetch(url, {
        method: "POST",
        body: new FormData(formulario)
    });

    if (!response.ok) {
        throw new Error(`Error HTTP: ${response.status}`);
    }

    return response.json();
}