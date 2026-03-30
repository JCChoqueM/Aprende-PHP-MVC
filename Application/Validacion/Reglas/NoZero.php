<?php

namespace Application\Validacion\Reglas;

class NoZero
{
    public static function validar(mixed $value): bool
    {
        if (!is_numeric($value)) return true; // no es su responsabilidad
        return $value != 0;
    }

    public static function mensaje(string $field): string
    {
        return "'$field' no puede ser cero";
    }
}