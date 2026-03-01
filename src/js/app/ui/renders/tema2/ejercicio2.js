// js/temas/Tema2/Ejercicio1.js

export function render(data) {


    document.getElementById('phpResult').innerHTML = `
         <div class="item"><span>Cantidad USD:</span> <strong>$${data.dolar}</strong></div>
                <div class="item total"><span>Equivalente en Bs:</span> <strong>${data.resultado} Bs.</strong></div>
    `;

}