<?php

namespace Application\Tema2;

use Application\Validacion\Reglas\NoNegativo;
use Application\Validacion\ValidacionNumero;

class Ejercicio4
{
    public static function procesar(): array
    {

        $validador = (new ValidacionNumero())->agregarRegla(NoNegativo::class);
        $result = $validador->ValidacionNumero(
            $_POST,
            ['primerNumero', 'segundoNumero'],
        );

        if (!$result['success']) return $result;
        ['primerNumero' => $primerNumero, 'segundoNumero' => $segundoNumero] = $result['input'];

        $suma = $primerNumero + $segundoNumero;
        $resta = $primerNumero - $segundoNumero;
        $multiplicacion = $primerNumero * $segundoNumero;
        $division = $segundoNumero != 0 ? $primerNumero / $segundoNumero : 'No se puede dividir por 0';

        $result['respuesta'] = [
            'suma'           => $suma,
            'resta'          => $resta,
            'multiplicacion' => $multiplicacion,
            'division'       => $division,
        ];
        return $result;
    }
}
