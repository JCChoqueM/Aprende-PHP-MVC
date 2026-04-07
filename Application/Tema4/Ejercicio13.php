<?php

namespace Application\Tema4;

use Application\AbstractEjercicio;

class Ejercicio13 extends AbstractEjercicio
{
    private const MAX_NUMEROS = 4;

    public static function procesar(): array
    {
        session_start();

        // Inicializar sesión
        if (!isset($_SESSION['positivos'])) {
            $_SESSION['positivos'] = 0;
            $_SESSION['negativos'] = 0;
            $_SESSION['cantidad']  = 0;
        }

        // Resetear
        if (($_POST['accion'] ?? '') === 'resetear') {
            $_SESSION['positivos'] = 0;
            $_SESSION['negativos'] = 0;
            $_SESSION['cantidad']  = 0;

            return [
                'success' => true,
                'respuesta' => [
                    'estado'    => 'reseteado',
                    'positivos' => 0,
                    'negativos' => 0,
                    'mensaje'   => 'Datos reiniciados.'
                ]
            ];
        }

        $result = self::validar(['Número']);
        if (!$result['success']) return $result;

        ['Número' => $numero] = $result['input'];
        $numero = (float) $numero;

        // Contar
        if ($numero > 0) $_SESSION['positivos']++;
        elseif ($numero < 0) $_SESSION['negativos']++;

        $_SESSION['cantidad']++;

        // Fin al llegar a 10
        if ($_SESSION['cantidad'] >= self::MAX_NUMEROS) {

            $respuesta = [
                'estado'    => 'fin',
                'positivos' => $_SESSION['positivos'],
                'negativos' => $_SESSION['negativos'],
            ];

            // Reset automático
            $_SESSION['positivos'] = 0;
            $_SESSION['negativos'] = 0;
            $_SESSION['cantidad']  = 0;

            return [
                'success'   => true,
                'respuesta' => $respuesta
            ];
        }

        // Continuar
        return [
            'success' => true,
            'respuesta' => [
                'estado'    => 'continuar',
                'positivos' => $_SESSION['positivos'],
                'negativos' => $_SESSION['negativos'],
                'intento'   => $_SESSION['cantidad'],
                'restantes' => self::MAX_NUMEROS - $_SESSION['cantidad'],
                'mensaje'   => 'Número registrado.'
            ]
        ];
    }
}