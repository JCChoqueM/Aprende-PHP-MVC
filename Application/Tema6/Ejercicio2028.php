<?php

namespace Application\Tema6;

use Application\AbstractEjercicio;

class Ejercicio2028 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = ['success' => true];

        // Genera un array de demostración y aplica todas las funciones

        // El render esperará:
        // data.respuesta.array            → array generado aleatoriamente
        // data.respuesta.minimo           → mínimo del array
        // data.respuesta.maximo           → máximo del array
        // data.respuesta.media            → media del array
        // data.respuesta.estaEn           → bool (busca el mínimo en el array)
        // data.respuesta.posicion         → posición del mínimo
        // data.respuesta.volteado         → array volteado
        // data.respuesta.rotadoDerecha    → array rotado 1 posición a la derecha
        // data.respuesta.rotadoIzquierda  → array rotado 1 posición a la izquierda

        // Tu lógica aquí
        // $array = generaArrayInt(10, 0, 100);
        // $result['respuesta'] = [
        //     'array'           => $array,
        //     'minimo'          => minimoArrayInt($array),
        //     'maximo'          => maximoArrayInt($array),
        //     'media'           => mediaArrayInt($array),
        //     'estaEn'          => estaEnArrayInt($array, minimoArrayInt($array)),
        //     'posicion'        => posicionEnArray($array, minimoArrayInt($array)),
        //     'volteado'        => volteaArrayInt($array),
        //     'rotadoDerecha'   => rotaDerechaArrayInt($array, 1),
        //     'rotadoIzquierda' => rotaIzquierdaArrayInt($array, 1),
        // ];

        return $result;
    }
}
