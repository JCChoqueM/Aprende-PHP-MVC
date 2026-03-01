<?php

namespace API\Validacion\Reglas;

class EsNumero
{
    public static function validar($value): bool
    {
        return is_numeric($value);
    }

    public static function mensaje(string $field): string
    {
        return "'$field' debe ser un número";
    }
}