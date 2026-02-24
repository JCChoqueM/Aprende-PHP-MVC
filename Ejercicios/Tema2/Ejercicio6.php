<?php
// 12_Ejercicio6.php (MODIFICADO)
// Tema 2/Ejercicios/ejercicio6 área de un triangulo/Ejercicio6.php

namespace Ejercicios\Tema2;

use Ejercicios\EjercicioBase;


class Ejercicio6 extends EjercicioBase
{

    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario2',
            'dato1' => 'Base (metros)',
            'placeholder1' => 'Ingrese la base del triángulo',
            'dato2' => 'Altura (metros)',
            'placeholder2' => 'Ingrese la altura del triángulo',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Escribe un programa que calcule el área de un triángulo.';
    }
}
