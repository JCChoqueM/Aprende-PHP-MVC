<?php

namespace Ejercicios\Tema1;

class Ejercicio3
{
    public static function resolver(): array
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
        $table = "<table border='1'>";
        $table .= "<tr><th>English</th><th>Español</th></tr>";
        foreach ($translations as $item) {
            $table .= "<tr><td>{$item[0]}</td><td>{$item[1]}</td></tr>";
        }
        $table .= "</table>";

        return [
            'resultado' => $table
        ];
    }
    public static function enunciado(): string
    {
        return
            'Escribe un programa que muestre por pantalla 10 palabras en inglés junto a su correspondiente traducción al castellano. Las palabras deben estar distribuidas en dos columnas. Utiliza la etiqueta ' . htmlspecialchars('<table>') . ' de HTML.';
    }
}
