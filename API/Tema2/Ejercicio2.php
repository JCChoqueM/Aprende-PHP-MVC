<?php

namespace Ejercicios\Tema2;

use Ejercicios\EjercicioBase;

class Ejercicio2 extends EjercicioBase
{
    protected static function enunciado(): string
    {
        return 'Realiza un conversor de Dolares a Bolivianos. La cantidad en dolares se introduce por teclado.';
    }

    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario1',
            'dato1' => 'Convertir',
            'placeholder1' => 'Ingrese el valor de Dolares que desea convertir',
        ];
    }

    // obtenerResultado() retorna '' por defecto de la clase base
    // porque el resultado vendrá de la API

    /**
     * Este método lo llama la API cuando se procesa el formulario
     */
    public static function procesar(): array
    {
        $boliviano = 6.96;
        $dolar = $_POST['campo1'] ?? 0;
        $contenido = $dolar . " dolares = " . ($dolar * $boliviano) . " bolivianos";
        
        return [
            'mensaje' => $contenido,
        ];
    }
}