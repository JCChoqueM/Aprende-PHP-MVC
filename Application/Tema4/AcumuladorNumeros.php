<?php

namespace Application\Tema4;

use Application\AbstractEjercicio;

class Ejercicio10 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        session_start();

        // Inicializar sesión
        if (!isset($_SESSION['numeros'])) {
            $_SESSION['numeros'] = [];
        }

        // Resetear
        if (($_POST['accion'] ?? '') === 'resetear') {
            $_SESSION['numeros'] = [];
            return [
                'success'   => true,
                'respuesta' => [
                    'estado'   => 'reseteado',
                    'cantidad' => 0,
                    'mensaje'  => 'Lista reseteada. Introduce números positivos.',
                ],
            ];
        }

        $result = self::validar(['Número']);
        if (!$result['success']) return $result;

        ['Número' => $numero] = $result['input'];

        $numero = (float) $numero;

        // Número negativo → fin
        if ($numero < 0) {
            $cantidad = count($_SESSION['numeros']);
            $media    = $cantidad > 0
                ? round(array_sum($_SESSION['numeros']) / $cantidad, 2)
                : 0;

            $numeros = $_SESSION['numeros'];
            $_SESSION['numeros'] = [];

            return [
                'success'   => true,
                'respuesta' => [
                    'estado'   => 'fin',
                    'numeros'  => $numeros,
                    'cantidad' => $cantidad,
                    'media'    => $media,
                    'mensaje'  => 'Cálculo completado.',
                ],
            ];
        }

        // Número positivo → acumular
        $_SESSION['numeros'][] = $numero;

        $result['respuesta'] = [
            'estado'   => 'acumulando',
            'numeros'  => $_SESSION['numeros'],
            'cantidad' => count($_SESSION['numeros']),
            'suma'     => array_sum($_SESSION['numeros']),
            'mensaje'  => 'Número añadido. Introduce otro o un negativo para terminar.',
        ];

        return $result;
    }
}