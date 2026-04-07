<?php

namespace Application\Tema4;

use Application\AbstractEjercicio;

class Ejercicio18 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número 1', 'Número 2']);
        if (!$result['success']) return $result;

        ['Número 1' => $n1, 'Número 2' => $n2] = $result['input'];

        // El render esperará:
        // data.input['Número 1'] → primer número
        // data.input['Número 2'] → segundo número
        // data.respuesta         → array con los números entre ambos incrementando de 7 en 7

        if ($n1 !== $n2) {
            $menor = min($n1, $n2);
            /*    $ordenado = range($menor, max($n1, $n2), 7); */
            $ordenado = [];
            for ($i = $menor; $i <= max($n1, $n2); $i += 7) {
                $ordenado[] = $i;
            }
        } else {
            $result['respuesta'] = [
                'estado' => 'error',
                'mensaje' => 'Los números deben ser diferentes'
            ];
        }
        $result['respuesta'] = $ordenado;
        return $result;
    }
}
