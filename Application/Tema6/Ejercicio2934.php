<?php

namespace Application\Tema6;

use Application\AbstractEjercicio;

class Ejercicio2934 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = ['success' => true];

        // Genera una matriz de demostración y aplica todas las funciones

        // El render esperará:
        // data.respuesta.matriz         → array 4x4 generado aleatoriamente
        // data.respuesta.fila           → fila 0 de la matriz
        // data.respuesta.columna        → columna 0 de la matriz
        // data.respuesta.coordenadas    → [fila, col] del primer número buscado
        // data.respuesta.esPuntoDeSilla → bool del elemento en [0][0]
        // data.respuesta.diagonalNose   → diagonal noroeste-sureste desde [0][0]
        // data.respuesta.diagonalNeso   → diagonal noreste-suroeste desde [0][0]

        // Tu lógica aquí
        // $matriz = generaArrayBiInt(4, 4, 0, 100);
        // $result['respuesta'] = [
        //     'matriz'         => $matriz,
        //     'fila'           => filaDeArrayBiInt($matriz, 0),
        //     'columna'        => columnaDeArrayBiInt($matriz, 0),
        //     'coordenadas'    => coordenadasEnArrayBiInt($matriz, $matriz[0][0]),
        //     'esPuntoDeSilla' => esPuntoDeSilla($matriz, 0, 0),
        //     'diagonalNose'   => diagonal($matriz, 0, 0, 'nose'),
        //     'diagonalNeso'   => diagonal($matriz, 0, 0, 'neso'),
        // ];

        return $result;
    }
}
