import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { ciudad, pais, temperatura, sensacionTermica, descripcion, humedad, viento, icono } = data.respuesta;

    const iconoUrl = `https://openweathermap.org/img/wn/${icono}@2x.png`;

    mostrarResultado(`
        <div style="background:linear-gradient(135deg,#1a6ef7,#00c6fb); color:#fff;
                    padding:24px; border-radius:12px; text-align:center;">
            <h2 style="margin:0 0 4px 0;">📍 ${ciudad}, ${pais}</h2>
            <img src="${iconoUrl}" alt="${descripcion}" style="width:80px;">
            <p style="text-transform:capitalize; margin:0;">${descripcion}</p>
            <div style="font-size:3em; font-weight:bold; margin:8px 0;">${temperatura}°C</div>
            <div style="display:flex; justify-content:center; gap:24px; margin-top:12px;">
                <div>🌡️ Sensación<br><b>${sensacionTermica}°C</b></div>
                <div>💧 Humedad<br><b>${humedad}%</b></div>
                <div>💨 Viento<br><b>${viento} m/s</b></div>
            </div>
        </div>
    `);
}
