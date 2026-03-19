<?php

namespace Ejercicios\Tema4;

use Ejercicios\EjercicioBase;

class Ejercicio20 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario2',
            'dato1' => 'Altura',
            'placeholder1' => 'Ingrese la altura de la pirámide',
            'dato2' => 'Símbolo',
            'placeholder2' => 'Ingrese el símbolo (ej: ⬤ 🧱 ⭐ 🔷 🔴)',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Igual que el ejercicio anterior pero esta vez se debe pintar una pirámide hueca.';
    }
}
