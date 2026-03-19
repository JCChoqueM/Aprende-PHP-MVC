<?php

namespace Ejercicios\Tema4;

use Ejercicios\EjercicioBase;

class Ejercicio19 extends EjercicioBase
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
        return 'Realiza un programa que pinte una pirámide por pantalla. La altura se debe pedir por teclado mediante un formulario. La pirámide estará hecha de bolitas, ladrillos o cualquier otra imagen de las 5 que se deben dar a elegir mediante un formulario.';
    }
}
