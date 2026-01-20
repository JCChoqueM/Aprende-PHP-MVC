<?php

namespace Ejercicios\Tema1;

class Ejercicio1
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
            'resultado' => 'Mi nombre es Julio Cesar Choque Mamani'
        ];
    }
    public static function metadata(): array
    {
        return [
            'tema' => 'Tema 1',
            'ejercicio' => 'Ejercicio 1',
            'descripcion' =>
            'Escribe un programa que muestre tu nombre por pantalla. Utiliza código PHP.'
        ];
    }
}
