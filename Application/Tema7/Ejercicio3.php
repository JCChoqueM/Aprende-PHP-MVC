<?php

namespace Application\Tema7;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\EsPositivo;

class Ejercicio3 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número'], [EsPositivo::class]);
        if (!$result['success']) return $result;

        ['Número' => $numero] = $result['input'];

        // Usa sesiones para acumular números mientras la suma no supere 10000

        // El render esperará según el estado:
        // Si suma <= 10000:
        //   data.respuesta.estado    → 'acumulando'
        //   data.respuesta.cantidad  → cuántos números se han introducido
        //   data.respuesta.suma      → suma acumulada
        // Si suma > 10000 (fin):
        //   data.respuesta.estado    → 'fin'
        //   data.respuesta.total     → total acumulado
        //   data.respuesta.cantidad  → total de números introducidos
        //   data.respuesta.media     → media de los números

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
