<?php

namespace Ejercicios\Tema6;

use Ejercicios\EjercicioBase;

class Ejercicio114 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario1',
            'dato1' => 'Número',
            'placeholder1' => 'Ingrese un número para probar la biblioteca',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Crea una biblioteca de funciones matemáticas que contenga las siguientes funciones:
1. esCapicua: Devuelve verdadero si el número es capicúa.
2. esPrimo: Devuelve verdadero si el número es primo.
3. siguientePrimo: Devuelve el menor primo mayor al número dado.
4. potencia: Dada una base y un exponente devuelve la potencia.
5. digitos: Cuenta el número de dígitos de un número entero.
6. voltea: Le da la vuelta a un número.
7. digitoN: Devuelve el dígito en la posición n (empezando por 0, de izquierda a derecha).
8. posicionDeDigito: Da la posición de la primera ocurrencia de un dígito. Si no se encuentra, devuelve -1.
9. quitaPorDetras: Le quita a un número n dígitos por detrás.
10. quitaPorDelante: Le quita a un número n dígitos por delante.
11. pegaPorDetras: Añade un dígito a un número por detrás.
12. pegaPorDelante: Añade un dígito a un número por delante.
13. trozoDeNumero: Toma posiciones inicial y final y devuelve el trozo correspondiente.
14. juntaNumeros: Pega dos números para formar uno.';
    }
}
