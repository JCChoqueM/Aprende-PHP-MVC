<?php

namespace API\Tema2;
class Ejercicio3 
{
 
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