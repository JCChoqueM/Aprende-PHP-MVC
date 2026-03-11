<?php

namespace Application\Validacion\Reglas;

class NoVacio
{
    public static function validar(mixed $value): bool
    {
        return $value !== null && $value !== '';
    }

    public static function mensaje(string $field): string
    {
        return "'$field' no puede estar vacío";
    }
}