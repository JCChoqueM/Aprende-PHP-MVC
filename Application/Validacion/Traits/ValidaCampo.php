<?php

namespace Application\Validacion\Traits;

trait ValidaCampo
{
    private function validarCampo(mixed $value, string $label): array
    {
        $errores = [];

        foreach ($this->reglas as $regla) {
            if (!$regla::validar($value)) {
                $errores[] = $regla::mensaje($label);
            }
        }

        return $errores;
    }
}