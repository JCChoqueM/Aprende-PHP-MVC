<?php

namespace Application\Validacion\Reglas;

class CantidadDigitos
{
    public function __construct(
        private int $min,
        private int $max
    ) {}

    public function validar(mixed $value): bool
    {
        if (!is_numeric($value)) return true; // no es su responsabilidad
        $digitos = strlen((string) abs((int) $value));
        return $digitos >= $this->min && $digitos <= $this->max;
    }

    public function mensaje(string $field): string
    {
        if ($this->min === $this->max) {
            return "'$field' debe tener exactamente {$this->min} dígito(s)";
        }
        return "'$field' debe tener entre {$this->min} y {$this->max} dígito(s)";
    }
}