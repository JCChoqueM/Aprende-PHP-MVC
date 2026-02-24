<?php

namespace API\Resultado;

class Resultado_Tabla implements Resultado_Interface
{
    private array $headers;
    private array $rows;

    public function __construct(array $headers, array $rows)
    {
        $this->headers = $headers;
        $this->rows = $rows;
    }

    public function toArray(): array
    {
        return [
            'type' => 'table',
            'data' => [
                'headers' => $this->headers,
                'rows' => $this->rows,
                'ok' => true
            ]
        ];
    }
}

// Sirve para:

// tablas de multiplicar

// arrays indexados

// matrices

// estadísticas