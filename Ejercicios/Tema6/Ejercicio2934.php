<?php

namespace Ejercicios\Tema6;

use Ejercicios\EjercicioBase;

class Ejercicio2934 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return ['formularioBool' => false];
    }

    protected static function enunciado(): string
    {
        return 'Crea una biblioteca de funciones para arrays bidimensionales de números enteros que contenga las siguientes funciones:
1. generaArrayBiInt: Genera un array n x m con números aleatorios en un intervalo dado.
2. filaDeArrayBiInt: Devuelve la fila i-ésima del array.
3. columnaDeArrayBiInt: Devuelve la columna j-ésima del array.
4. coordenadasEnArrayBiInt: Devuelve la fila y columna de la primera ocurrencia de un número. Si no se encuentra, devuelve {-1, -1}.
5. esPuntoDeSilla: Dice si un número es punto de silla (mínimo en su fila y máximo en su columna).
6. diagonal: Devuelve una de las diagonales del array. La dirección puede ser "nose" (noroeste-sureste) o "neso" (noreste-suroeste).';
    }
}
