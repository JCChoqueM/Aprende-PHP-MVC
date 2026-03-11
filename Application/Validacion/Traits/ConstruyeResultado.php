<?php

namespace Application\Validacion\Traits;

trait ConstruyeResultado
{
   private function construirResultado(array $data, array $campos): array
{
    $resultado = ['success' => true];
    $datos = [];

    foreach ($campos as $index => $label) {
        $datos[$label] = $data["campo" . ($index + 1)];
    }

    $resultado['input'] = $datos;

    return $resultado;
}

    private function construirErrores(array $errors): array
    {
        return ['success' => false, 'errors' => $errors];
    }
}