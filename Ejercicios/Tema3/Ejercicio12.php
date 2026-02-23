<?php

namespace Ejercicios\Tema3;

use Ejercicios\EjercicioBase;

class Ejercicio12 extends EjercicioBase
{


    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario2',
            'dato1' => 'Base (metros)',
            'placeholder1' => 'Ingrese la base del rectángulo',
            'dato2' => 'Altura (metros)',
            'placeholder2' => 'Ingrese la altura del rectángulo',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Realiza un minicuestionario con 10 preguntas tipo test sobre las asignaturas que se imparten en
el curso. Cada pregunta acertada sumará un punto. El programa mostrará al final la calificación
obtenida. Pásale el minicuestionario a tus compañeros y pídeles que lo hagan para ver qué tal andan
de conocimientos en las diferentes asignaturas del curso.';
    }
}
