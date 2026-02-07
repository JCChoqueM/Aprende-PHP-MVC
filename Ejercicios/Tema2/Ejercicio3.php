<?php

namespace Ejercicios\Tema2;

use Ejercicios\EjercicioBase;

class Ejercicio3 extends EjercicioBase
{
    protected static function enunciado(): string
    {
        return 'Realiza un conversor de bolivianos a dolar. La cantidad en pesetas que se quiere convertir se deberá
introducir por teclado.';
    }

    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario1',
            'dato1' => 'Convertir',
            'placeholder1' => 'Ingrese el valor de Bolivianos que desea convertir',
        ];
    }

    // obtenerResultado() retorna '' por defecto de la clase base
    // porque el resultado vendrá de la API

    /**
     * Este método lo llama la API cuando se procesa el formulario
     */
    public static function procesar(): array
    {
        $dolar = 6.96;
        $boliviano = $_POST['campo1'] ?? 0;
        $convertido=round($boliviano/$dolar,2);
        $contenido = $boliviano . " bolivianos = " . $convertido . " dolares";
        
        return [
            'mensaje' => $contenido,
        ];
    }
}