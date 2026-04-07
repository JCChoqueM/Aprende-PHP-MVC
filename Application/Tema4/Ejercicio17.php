<?php

namespace Application\Tema4;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\EsPositivo;

class Ejercicio17 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número'], [EsPositivo::class]);
        if (!$result['success']) return $result;

        ['Número' => $numero] = $result['input'];

        // El render esperará:
        // data.input.Número  → el número introducido
        // data.respuesta     → suma de los 100 números siguientes

        // Tu lógica aqui
        $cantidad = 100; // o cualquier valor dinámico
        $suma = 0;

        for ($i = 1; $i <= $cantidad; $i++) {
            $suma += ($numero + $i);
        }

        $result['respuesta'] = $suma;

        return $result;
    }
}
