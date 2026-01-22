<?php

namespace Ejercicios\Tema1;

use Ejercicios\Contracts\EjercicioInterface;
use Ejercicios\Resultado\ResultadoTabla;

class Ejercicio4 implements EjercicioInterface
{
    public static function enunciado(): string
    {
        return 'Muestra tu horario de clase en una tabla.';
    }

    public static function resolver(): ResultadoTabla
    {
        $datos = [
            ['Hora', 'Materia', 'Profesor'],
            ['19:00', 'Informatica I', 'Ing. Ery Cruz Burgoa'],
            ['20:30', 'Algebra Lineal', 'Lic. W. Adiviri'],
            ['20:30', 'Algebra Lineal', 'Lic. W. Adiviri'],
        ];
        return new ResultadoTabla(
            $datos,
            'rgb(255, 72, 0)',    // fondo del header
            'mi-tabla',   // clase de tabla
            'mi-td',      // clase de celdas
            'tabla1'      // id único
        );
    }
}
