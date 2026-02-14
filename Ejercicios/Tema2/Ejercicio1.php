<?php

namespace Ejercicios\Tema2;

use Ejercicios\EjercicioBase;
use Ejercicios\Resultado\Resultado_Scalar;

class Ejercicio1 extends EjercicioBase
{
    public static function enunciado(): string
    {
        return 'Realiza un programa que pida dos números y luego muestre el resultado de su multiplicación.';
    }

    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario2',
            'dato1' => 'Multiplicando',
            'placeholder1' => 'Ingrese el primer número',
            'dato2' => 'Multiplicador',
            'placeholder2' => 'Ingrese el segundo número',
        ];
    }

   
public static function procesar(): array
{
    $a = (float) ($_POST['campo1'] ?? 0);
    $b = (float) ($_POST['campo2'] ?? 0);

    $resultado = new Resultado_Scalar(
        'Resultado de la multiplicación',
        $a * $b
    );

    return [
        'ok' => true
    ] + $resultado->toArray();
}

}
