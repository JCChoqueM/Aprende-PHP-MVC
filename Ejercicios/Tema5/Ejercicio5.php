<?php

namespace Ejercicios\Tema5;

use Ejercicios\EjercicioBase;

class Ejercicio5 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario12',
            'dato1' => 'Enero',
            'placeholder1' => 'Temperatura media de Enero',
            'dato2' => 'Febrero',
            'placeholder2' => 'Temperatura media de Febrero',
            'dato3' => 'Marzo',
            'placeholder3' => 'Temperatura media de Marzo',
            'dato4' => 'Abril',
            'placeholder4' => 'Temperatura media de Abril',
            'dato5' => 'Mayo',
            'placeholder5' => 'Temperatura media de Mayo',
            'dato6' => 'Junio',
            'placeholder6' => 'Temperatura media de Junio',
            'dato7' => 'Julio',
            'placeholder7' => 'Temperatura media de Julio',
            'dato8' => 'Agosto',
            'placeholder8' => 'Temperatura media de Agosto',
            'dato9' => 'Septiembre',
            'placeholder9' => 'Temperatura media de Septiembre',
            'dato10' => 'Octubre',
            'placeholder10' => 'Temperatura media de Octubre',
            'dato11' => 'Noviembre',
            'placeholder11' => 'Temperatura media de Noviembre',
            'dato12' => 'Diciembre',
            'placeholder12' => 'Temperatura media de Diciembre',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Realiza un programa que pida la temperatura media que ha hecho en cada mes de un determinado año y que muestre a continuación un diagrama de barras horizontales con esos datos.';
    }
}
