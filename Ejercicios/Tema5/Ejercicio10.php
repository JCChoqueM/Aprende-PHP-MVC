<?php

namespace Ejercicios\Tema5;

use Ejercicios\EjercicioBase;

class Ejercicio10 extends EjercicioBase
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
        return 'Realiza un programa que escoja al azar 10 cartas de la baraja española y que diga cuántos puntos
suman según el juego de la brisca. Emplea un array asociativo para obtener los puntos a partir del
nombre de la figura de la carta. Asegúrate de que no se repite ninguna carta, igual que si las hubieras
cogido de una baraja de verdad.';
    }
}
