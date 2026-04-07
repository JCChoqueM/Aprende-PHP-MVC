<?php

namespace Application\Tema4;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\EsPositivo;

class Ejercicio16 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número'], [EsPositivo::class]);
        if (!$result['success']) return $result;

        ['Número' => $numero] = $result['input'];

        // El render esperará:
        // data.input.Número  → el número introducido
        // data.respuesta     → 'Es primo' o 'No es primo'
        $limite = (int) sqrt($numero);
        if ($numero == 0 || $numero == 1) {
            $esprimo = false;
        } else {
            $esprimo = true;
            for ($i = 2; $i <= $limite; $i++) {
                if ($numero % $i == 0) {
                    $esprimo = false;
                    break;
                }
            }
        }
        $result['respuesta'] = $esprimo ? 'Es primo' : 'No es primo';
        return $result;
    }
}
