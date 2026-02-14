// ============================================
// 07-FormularioEjercicio.js
// Responsable de coordinar el envío y mostrar resultado
// ============================================

export class FormularioEjercicio {
    constructor(formulario, parametrosRuta, ejercicioService, resultadoRenderer) {
        this.formulario = formulario;
        this.parametrosRuta = parametrosRuta;
        this.ejercicioService = ejercicioService;
        this.resultadoRenderer = resultadoRenderer;
    }

    configurarEventos(botonResolver) {
        if (!botonResolver) return;

        botonResolver.addEventListener('click', (e) => {
            e.preventDefault();
            this.procesar();
        });
    }

    async procesar() {
        try {
            // 1. Obtener datos del formulario
            const formData = new FormData(this.formulario);

            const datos = Object.fromEntries(formData.entries());

            // 2. Llamar al servicio
            const respuesta = await this.ejercicioService.resolver(
                this.parametrosRuta,
                datos
            );

            // 3. Renderizar resultado
            this.resultadoRenderer.render(respuesta);

        } catch (error) {
            console.error("Error al procesar ejercicio:", error);

            this.resultadoRenderer.render({
                type: 'evaluation',
                data: {
                    ok: false,
                    message: 'Error al procesar la solicitud'
                }
            });
        }
    }
}
