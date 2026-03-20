<?php

namespace Ejercicios\Tema12;

use Ejercicios\EjercicioBase;

class Ejercicio1 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario1',
            'dato1' => 'Ciudad',
            'placeholder1' => 'Ingrese el nombre de la ciudad',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Utilizando la API de OpenWeatherMap, realiza una aplicación que muestre la información meteorológica de una determinada ciudad. Para la selección de la ciudad se puede utilizar un buscador.';
    }
}
