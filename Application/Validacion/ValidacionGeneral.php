<?php

namespace Application\Validacion;

use Application\Validacion\Reglas\EsNumero;
use Application\Validacion\Reglas\NoVacio;

class ValidacionGeneral
{
    private array $errors = [];
    private array $data   = [];
    private array $reglas = [EsNumero::class, NoVacio::class];

    public function procesar(array $campos): array
    {
        $this->data = $_POST;

        foreach ($campos as $inputName => $label) {
            $value = $this->data[$inputName] ?? null;

            foreach ($this->reglas as $regla) {
                if (!$regla::validar($value)) {
                    $this->errors[$inputName] = $regla::mensaje($label);
                }
            }
        }

        if (!empty($this->errors)) {
            return ['success' => false, 'errors' => $this->errors];
        }

        return ['success' => true, ...$this->data];
    }
}
