<?php

namespace Ejercicios\Tema12;

use Ejercicios\EjercicioBase;

class Ejercicio1 extends EjercicioBase
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
        return 'Utilizando la API de OpenWeatherMap, realiza una aplicación que muestre la información
meteorológica de una determinada ciudad. Para la selección de la ciudad se puede utilizar un mapa,
una o varias listas desplegables, un buscador o combinaciones de los métodos anteriores.';
    }
}
