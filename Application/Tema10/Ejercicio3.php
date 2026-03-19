<?php

namespace Application\Tema10;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\EsPositivo;

class Ejercicio3 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Base', 'Altura'], [EsPositivo::class]);
        if (!$result['success']) return $result;

        ['Base' => $base, 'Altura' => $altura] = $result['input'];

        // El render esperará:
        // data.input.Base    → base del rectángulo
        // data.input.Altura  → altura del rectángulo
        // data.respuesta     → área del rectángulo (base x altura)

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
