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
            'dato1' => 'Base (metros)',
            'placeholder1' => 'Ingrese la base del rectángulo',
            'dato2' => 'Altura (metros)',
            'placeholder2' => 'Ingrese la altura del rectángulo',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Establece un control de acceso mediante nombre de usuario y contraseña para cualquiera de los
programas de la relación anterior. La aplicación no nos dejará continuar hasta que iniciemos sesión
con un nombre de usuario y contraseña correctos.';
    }
}
