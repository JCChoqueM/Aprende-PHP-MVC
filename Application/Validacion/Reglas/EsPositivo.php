<?php

namespace Application\Validacion\Reglas;

class EsPositivo
{
    public static function validar(mixed $value): bool
    {
        return is_numeric($value) && $value > 0;
    }

    public static function mensaje(string $field): string
    {
        return "'$field' debe ser un número positivo";
    }
}