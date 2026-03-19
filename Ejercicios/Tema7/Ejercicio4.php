<?php

namespace Ejercicios\Tema7;

use Ejercicios\EjercicioBase;

class Ejercicio4 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario2',
            'dato1' => 'Usuario',
            'placeholder1' => 'Ingrese su nombre de usuario',
            'dato2' => 'Contraseña',
            'placeholder2' => 'Ingrese su contraseña',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Establece un control de acceso mediante nombre de usuario y contraseña para cualquiera de los programas de la relación anterior. La aplicación no nos dejará continuar hasta que iniciemos sesión con un nombre de usuario y contraseña correctos.';
    }
}
