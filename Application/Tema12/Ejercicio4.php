<?php

namespace Application\Tema12;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\Rango;

class Ejercicio4 extends AbstractEjercicio
{
    private const PALOS   = ['Oros', 'Copas', 'Espadas', 'Bastos'];
    private const FIGURAS = ['As', '2', '3', '4', '5', '6', '7', 'Sota', 'Caballo', 'Rey'];

    public static function procesar(): array
    {
        $result = self::validar(['Número de cartas'], [new Rango(1, 40)]);
        if (!$result['success']) return $result;

        ['Número de cartas' => $n] = $result['input'];

        // El render esperará:
        // data.input['Número de cartas'] → número de cartas solicitadas
        // data.respuesta                 → array de cartas [{figura, palo}]

        // Tu lógica aquí
        // Genera la baraja completa (40 cartas), mezcla y coge las $n primeras
        // $result['respuesta'] = ...

        return $result;
    }
}
