<?php
namespace Ejercicios\Resultado;
class Resultado_Texto implements Resultado_Interface
{
    private string $tipo;
    private array $data;

    public function __construct(string $label, string|int|float $value)
    {
        $this->tipo = 'result';
        $this->data = [
            'label' => $label,
            'value' => $value
        ];
    }

    public function toArray(): array
    {
        return [
            'type' => $this->tipo,
            'data' => $this->data
        ];
    }
}
