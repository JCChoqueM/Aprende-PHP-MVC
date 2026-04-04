<?php

namespace Ejercicios\Tema4;

use Ejercicios\EjercicioBase;

class Ejercicio13 extends EjercicioBase
{
    // PENDIENTE: requiere input dinámico (lista de 10 números)

    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario1',
            'dato1' => 'Términos',
            'placeholder1' => 'Ingrese el número ',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Escribe un programa que lea una lista de diez números y determine cuántos son positivos, y cuántos son negativos.';
    }
}
