<?php

namespace Application\Tema4;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\Rango;

class Ejercicio7 extends AbstractEjercicio
{
    private const COMBINACION  = 1234;
    private const MAX_INTENTOS = 4;

    public static function procesar(): array
    {
        session_start();

        if (!isset($_SESSION['intentos'])) {
            $_SESSION['intentos'] = 0;
        }

        // Resetear intentos
        if (($_POST['accion'] ?? '') === 'resetear') {
            $_SESSION['intentos'] = 0;
            return [
                'success'   => true,
                'respuesta' => [
                    'abierta'   => false,
                    'bloqueada' => false,
                    'intentos'  => 0,
                    'restantes' => self::MAX_INTENTOS,
                    'mensaje'   => 'Intentos reseteados. Puedes volver a intentarlo.',
                ],
            ];
        }

        // Sin oportunidades restantes
        if ($_SESSION['intentos'] >= self::MAX_INTENTOS) {
            return [
                'success'   => true,
                'respuesta' => [
                    'abierta'   => false,
                    'bloqueada' => true,
                    'intentos'  => $_SESSION['intentos'],
                    'restantes' => 0,
                    'mensaje'   => 'Has agotado los 4 intentos. La caja está bloqueada.',
                ],
            ];
        }

        $result = self::validar(['Combinación'], [new Rango(1000, 9999)]);
        if (!$result['success']) return $result;

        ['Combinación' => $combinacion] = $result['input'];

        $abierta = (int) $combinacion === self::COMBINACION;

if (!$abierta) {
    $_SESSION['intentos']++;
} else {
    $_SESSION['intentos'] = 0;
}

// ✅ Comprueba bloqueo DESPUÉS de incrementar
if (!$abierta && $_SESSION['intentos'] >= self::MAX_INTENTOS) {
    return [
        'success'   => true,
        'respuesta' => [
            'abierta'   => false,
            'bloqueada' => true,
            'intentos'  => $_SESSION['intentos'],
            'restantes' => 0,
            'mensaje'   => 'Has agotado los 4 intentos. La caja está bloqueada.',
        ],
    ];
}

$intentosFallidos = $abierta ? 0 : $_SESSION['intentos'];
$restantes        = self::MAX_INTENTOS - $intentosFallidos;

$result['respuesta'] = [
    'abierta'   => $abierta,
    'bloqueada' => false,
    'intentos'  => $intentosFallidos,
    'restantes' => $restantes,
    'mensaje'   => $abierta
        ? 'La caja fuerte se ha abierto satisfactoriamente'
        : "Lo siento, esa no es la combinación. Te quedan $restantes intentos.",
];

        return $result;
    }
}