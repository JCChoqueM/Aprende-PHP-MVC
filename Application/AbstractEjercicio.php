<?php

namespace Application;

use Application\Validacion\ValidacionNumero;

abstract class AbstractEjercicio 
{
    protected static function validar(
        array $campos, 
        array $reglas = [],
        array $reglasQuitar = []
    ): array
    {
        $validador = new ValidacionNumero();

        foreach ($reglas as $regla) {
            $validador->agregarRegla($regla);
        }

        foreach ($reglasQuitar as $regla) {
            $validador->quitarRegla($regla);
        }

        return $validador->ValidacionNumero($_POST, $campos);
    }
}