<?php

namespace Ejercicios\Tema2;

use MVC\Router;
use Ejercicios\Contracts\EjercicioInterface;
use Ejercicios\Resultado\ResultadoTexto;

class Ejercicio2 //implements EjercicioInterface
{

    public static function procesar(Router $router): array
    {
        $boliviano = 6.96;
        $dolar =  $_POST['campo1'] ?? 0;;
        $contenido = $dolar . " dolares es = " . ($dolar * $boliviano) . " bolivianos";
        return [
            'mensaje' => $contenido,
        ];
    }
    public static function enunciado(): string
    {
        return 'Realiza un conversor de Dolares a Bolivianos. Ahora la cantidad en euros que se quiere convertir se
deberá introducir por teclado.';
    }
    public static function formulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario1',
            'dato1' => 'Convertir',
            'placeholder1' => 'Ingrese el valor de Dolares que desea convertir',
        ];
    }
}
