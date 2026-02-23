<?php

namespace API\Tema2;
class Ejercicio2 
{

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