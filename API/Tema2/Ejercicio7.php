<?php

namespace API\Tema2;

use API\Resultado\Resultado_JSON;
use API\Resultado\Resultado_Error;
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
            $resultado = new Resultado_Error($validacion['errores']);
            return $resultado->toArray();
        }

        $compra = $validacion['datos']['campo1'];
        $porcentajeIVA = $validacion['datos']['campo2'];
        $iva = $compra * ($porcentajeIVA / 100);
        $total = $compra + $iva;

        // Retornar SOLO los datos calculados
        $resultado = new Resultado_JSON('factura', [
            'precioBase' => round($compra, 2),
            'porcentajeIVA' => $porcentajeIVA,
            'montoIVA' => round($iva, 2),
            'total' => round($total, 2)
        ]);

        return $resultado->toArray();
    }
}
