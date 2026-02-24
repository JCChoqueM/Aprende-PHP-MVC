<?php

namespace API\Resultado;

class Resultado_Lista implements Resultado_Interface
{
    private string $descripcion;
    private array $valores;

    public function __construct(string $descripcion, array $valores)
    {
        $this->descripcion = $descripcion;
        $this->valores = $valores;
    }

    public function toArray(): array
    {
        return [
            'type' => 'list',
            'data' => [
                'descripcion' => $this->descripcion,
                'valores' => $this->valores,
                'ok' => true
            ]
        ];
    }
}

// Sirve para:

// múltiplos

// primos

// Fibonacci

// rangos

// secuencias