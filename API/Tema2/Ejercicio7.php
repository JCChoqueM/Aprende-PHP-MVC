<?php

namespace API\Tema2;

use API\Resultado\Resultado_Texto;
use API\Validacion\ValidadorFactory;

class Ejercicio7
{
    public static function procesar(): array
    {
        // Usar el Factory para validación
        $validador = ValidadorFactory::numericoPositivo([
            'campo1' => 'Precio de compra',
            'campo2' => 'Porcentaje IVA'
        ]);

        $validacion = $validador->validar($_POST);

        if (!$validacion['valido']) {
            return [
                'type' => 'evaluation',
                'data' => [
                    'ok' => false,
                    'message' => implode('<br>', $validacion['errores'])
                ]
            ];
        }

        $compra = $validacion['datos']['campo1'];
        $porcentajeIVA = $validacion['datos']['campo2'] / 100;
        $iva = $compra * $porcentajeIVA;
        $total = $compra + $iva;

        $resultado = new Resultado_Texto(
            'Cálculo de Factura',
            "Precio base: {$compra} Bs.<br>IVA: {$iva} Bs.<br>Total: {$total} Bs."
        );

        return $resultado->toArray();
    }
}
