<?php

namespace Application\Validacion\Reglas;

class Rango
{
    public function __construct(
        private int $min,
        private int $max
    ) {}

    public function validar(mixed $value): bool
    {
        if (!is_numeric($value)) return true; // no es su responsabilidad
        return $value >= $this->min && $value <= $this->max;
    }

    public function mensaje(string $field): string
    {
        return "'$field' debe estar entre {$this->min} y {$this->max}";
    }
}