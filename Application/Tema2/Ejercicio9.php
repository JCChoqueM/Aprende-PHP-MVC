<?php

namespace Application\Tema2;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\NoNegativo;

class Ejercicio9 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Radio', 'Altura'], [NoNegativo::class]);

        if (!$result['success']) return $result;
        ['Radio' => $radio, 'Altura' => $altura] = $result['input'];
        $volumenDividendo = M_PI * pow($radio, 2) * $altura;
        $volumen = round($volumenDividendo / 3, 2);
        $result['respuesta'] = [
            'volumen' => $volumen
        ];

        return $result;
    }
}
