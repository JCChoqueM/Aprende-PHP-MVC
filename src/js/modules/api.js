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

  const url = `/api/tema1/ejercicio1`;
  console.log(url);
  try {
    const resultado = await fetch(url);
    const data = await resultado.json();
    console.log(data);
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
    const path = window.location.pathname; // "/tema1/ejercicio2"
    
    // Buscar "tema" seguido de números y "ejercicio" seguido de números
    const regex = /tema(\d+)\/ejercicio(\d+)/;
    const match = path.match(regex);

    if (match) {
        return {
            tema: parseInt(match[1], 10),
            ejercicio: parseInt(match[2], 10)
        };
    } else {
        return { tema: null, ejercicio: null };
    }
}

