<?php

namespace Ejercicios\Tema6;

use Ejercicios\EjercicioBase;

class Ejercicio2028 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return ['formularioBool' => false];
    }

    protected static function enunciado(): string
    {
        return 'Crea una biblioteca de funciones para arrays (de una dimensión) de números enteros que contenga las siguientes funciones:
1. generaArrayInt: Genera un array de tamaño n con números aleatorios en un intervalo dado.
2. minimoArrayInt: Devuelve el mínimo del array.
3. maximoArrayInt: Devuelve el máximo del array.
4. mediaArrayInt: Devuelve la media del array.
5. estaEnArrayInt: Dice si un número está o no dentro de un array.
6. posicionEnArray: Busca un número en un array y devuelve su posición (índice).
7. volteaArrayInt: Le da la vuelta a un array.
8. rotaDerechaArrayInt: Rota n posiciones a la derecha los números de un array.
9. rotaIzquierdaArrayInt: Rota n posiciones a la izquierda los números de un array.';
    }
}
