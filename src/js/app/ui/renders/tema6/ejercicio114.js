import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Número: n } = data.input;
    const r = data.respuesta;

    mostrarResultado(`
        Número: ${n} <br><br>
        ¿Es capicúa? → ${r.esCapicua ? 'Sí' : 'No'} <br>
        ¿Es primo? → ${r.esPrimo ? 'Sí' : 'No'} <br>
        Siguiente primo → ${r.siguientePrimo} <br>
        Número de dígitos → ${r.digitos} <br>
        Volteado → ${r.voltea} <br>
        Dígito en posición 0 → ${r.digitoN} <br>
        Posición del dígito ${r.digitoN} → ${r.posicionDeDigito} <br>
        Quitar 1 por detrás → ${r.quitaPorDetras} <br>
        Quitar 1 por delante → ${r.quitaPorDelante} <br>
        Pegar 5 por detrás → ${r.pegaPorDetras} <br>
        Pegar 5 por delante → ${r.pegaPorDelante} <br>
        Trozo [0-1] → ${r.trozoDeNumero} <br>
        Juntar con sí mismo → ${r.juntaNumeros}
    `);
}
