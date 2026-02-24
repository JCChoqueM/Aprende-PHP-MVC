<?php

namespace API\Resultado;

/**
 * Resultado_Error - Retorna errores sin formateo HTML
 * 
 * Solo contiene array de errores, JavaScript es responsable de formatearlos.
 */
class Resultado_Error
{
    private array $errores;

    /**
     * @param array $errores Array de mensajes de error
     */
    public function __construct(array $errores)
    {
        $this->errores = $errores;
    }

    public function toArray(): array
    {
        return [
            'type' => 'error',
            'data' => [
                'ok' => false,
                'errores' => $this->errores
            ]
        ];
    }
}
