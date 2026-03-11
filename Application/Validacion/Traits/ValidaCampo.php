<?php

namespace Application\Validacion\Traits;

trait ValidaCampo
{
    private function validarCampo(mixed $value, string $label): array
    {
        $errores = [];

        foreach ($this->reglas as $regla) {
            // instancia (new Rango(1,7)) o clase estática (NoNegativo::class)
            if (is_object($regla)) {
                if (!$regla->validar($value)) {
                    $errores[] = $regla->mensaje($label);
                }
            } else {
                if (!$regla::validar($value)) {
                    $errores[] = $regla::mensaje($label);
                }
            }
        }

        return $errores;
    }
}