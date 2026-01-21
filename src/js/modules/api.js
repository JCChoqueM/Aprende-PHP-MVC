document.addEventListener('DOMContentLoaded', function () {
    const { tema, ejercicio } = obtenerTemaEjercicio();

    if (tema && ejercicio) {
        iniciarApp(tema, ejercicio); // PASAMOS los valores
    }
});

function iniciarApp(tema, ejercicio) {
    consultarAPI(tema, ejercicio);
}


const $id = id => document.getElementById(id);

async function consultarAPI(tema, ejercicio) {
  const contenedor = $id('jsResult');
  contenedor.textContent = 'Cargando...';

  const url = `/api/tema/${tema}/ejercicio/${ejercicio}`;
  
  try {
    const resultado = await fetch(url);
    const data = await resultado.json();
    mostrarServicios(data);
  } catch (error) {
    contenedor.textContent = 'Error al cargar los datos.';
    console.error(error);
  }
}
function mostrarServicios(servicios) {


    // uso
    $id('jsResult').textContent = servicios.mensaje;

}
function obtenerTemaEjercicio() {
    // /tema/1/ejercicio/2
    const path = window.location.pathname; // "/tema/1/ejercicio/2"
    const partes = path.split('/').filter(p => p !== ''); // ["tema","1","ejercicio","2"]
    
    const temaIndex = partes.indexOf('tema');
    const ejercicioIndex = partes.indexOf('ejercicio');

    const tema = temaIndex !== -1 ? partes[temaIndex + 1] : null;
    const ejercicio = ejercicioIndex !== -1 ? partes[ejercicioIndex + 1] : null;

    return { tema, ejercicio };
}
