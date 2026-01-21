<?php

namespace Ejercicios\Tema1;

use Ejercicios\Resultado\ResultadoTabla;

class Ejercicio3
{
    public static function resolver(): ResultadoTabla
    {
        $translations = [
            ["Dog", "Perro"],
            ["Cat", "Gato"],
            ["House", "Casa"],
            ["Car", "Coche"],
            ["Book", "Libro"],
            ["Chair", "Silla"],
            ["Water", "Agua"],
            ["Sun", "Sol"],
            ["Moon", "Luna"],
            ["Tree", "Árbol"]
        ];

        // Insertamos encabezado
        $tablaCompleta = array_merge([["English", "Español"]], $translations);

        return new ResultadoTabla($tablaCompleta);
    }

    public static function enunciado(): string
    {
        return 'Escribe un programa que muestre por pantalla 10 palabras en inglés junto a su correspondiente traducción al castellano. Las palabras deben estar distribuidas en dos columnas. Utiliza la etiqueta <table> de HTML.';
    }
}
