<?php

namespace Ejercicios\Tema11;

use Ejercicios\EjercicioBase;

class Ejercicio2 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return ['formularioBool' => false];
    }

    protected static function enunciado(): string
    {
        return 'Mejora el ejercicio anterior incorporando la herencia en las plantillas Twig para no repetir código de la cabecera, el pie de página, etc.';
    }
}
