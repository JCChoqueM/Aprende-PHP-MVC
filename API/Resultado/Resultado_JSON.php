<?php

namespace API\Resultado;

/**
 * Resultado_JSON - Retorna datos estructurados sin formateo HTML
 * 
 * Permite que JavaScript sea responsable de toda la presentación.
 * La API solo entrega datos puros.
 */
class Resultado_JSON implements Resultado_Interface
{
    private string $type;
    private array $data;

    /**
     * @param string $type Tipo de resultado (result, operaciones, etc)
     * @param array $data Datos estructurados sin HTML
     */
    public function __construct(string $type, array $data)
    {
        $this->type = $type;
        $this->data = array_merge($data, ['ok' => true]);
    }

    public function toArray(): array
    {
        return [
            'type' => $this->type,
            'data' => $this->data
        ];
    }
}
