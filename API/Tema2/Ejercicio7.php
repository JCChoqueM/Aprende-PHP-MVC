<?php

namespace Ejercicios\Tema2;

use Ejercicios\EjercicioBase;
use Ejercicios\Validacion\ValidadorFactory;

class Ejercicio7 extends EjercicioBase
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

    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario2',
            'dato1' => 'Precio de compra',
            'placeholder1' => 'Ingrese el precio de la compra',
            'dato2' => 'Base imponible %',
            'placeholder2' => 'Ingrese el valor de la base imponible',
            'valor2' => '10',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Escribe un programa que calcule el total de una factura a partir de la base imponible.';
    }
}
