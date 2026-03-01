<?php

namespace API\Validacion\Reglas;

class NoVacio
{
    public static function validar($value): bool
    {
        return $value !== null && trim((string)$value) !== '';
    }

    public static function mensaje(string $field): string
    {
        return "'$field' no puede estar vacío";
    }
}