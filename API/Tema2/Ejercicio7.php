<?php

namespace API\Tema2;


use API\Validacion\ValidadorFactory;

class Ejercicio7 
{
    public static function procesar(): array
    {
        // Usar el Factory para validación
        $validador = ValidadorFactory::numericoPositivo([
            'campo1' => 'Compra',
            'campo2' => 'Base Imponible'
        ]);

        $validacion = $validador->validar($_POST);

        if (!$validacion['valido']) {
            http_response_code(400);
            return [
                'error' => true,
                'mensaje' => implode('<br>', $validacion['errores'])
            ];
        }

        $compra = $validacion['datos']['campo1'];
        $baseImponible = $validacion['datos']['campo2'] / 100;
        $factura = $compra * $baseImponible;
        $total = $compra + $factura;
        // error_log('Tipo compra: ' . gettype($_POST['campo1']));
        // error_log('Tipo compra: ' . gettype($_POST['campo2']));
        http_response_code(200);
        return [
            'error' => false,
            'mensaje' => "El precio de compra es:   {$compra} Bs.<br> Su factura total es de: {$total} Bs."
        ];
    }
}
