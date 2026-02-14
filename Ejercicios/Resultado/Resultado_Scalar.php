<?php
namespace Ejercicios\Resultado;
class Resultado_Scalar implements Resultado_Interface
{
    private string $label;
    private int|float|string|bool $value;

    public function __construct(string $label, $value)
    {
        $this->label = $label;
        $this->value = $value;
    }

    public function toArray(): array
    {
        return [
            'type' => 'result',
            'data' => [
                'label' => $this->label,
                'value' => $this->value
            ]
        ];
    }
}

// Sirve para:

// multiplicaciones

// conversiones

// salarios

// áreas

// volúmenes