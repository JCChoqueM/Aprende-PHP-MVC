<?php

namespace Application\Validacion;

use Application\Validacion\Reglas\EsNumero;
use Application\Validacion\Reglas\NoVacio;
use Application\Validacion\Traits\GestionaReglas;
use Application\Validacion\Traits\ValidaCampo;
use Application\Validacion\Traits\ConstruyeResultado;

class ValidacionNumero
{
    use GestionaReglas;
    use ValidaCampo;
    use ConstruyeResultado;

    private array $errors = [];
    private array $reglas;

    public function __construct(array $reglas = [
        NoVacio::class,
        EsNumero::class,
    ])
    {
        $this->reglas = $reglas;
    }

    public function ValidacionNumero(array $data, array $campos): array
    {
        $this->errors = [];

        foreach ($campos as $index => $label) {  
            $inputName = "campo" . ($index + 1);
            $value     = $data[$inputName] ?? null;
            $erroresCampo = $this->validarCampo($value, $label);

            foreach ($erroresCampo as $error) {
                $this->errors[] = $error;
            }
        }

        if (!empty($this->errors)) {
            return $this->construirErrores($this->errors);
        }

        return $this->construirResultado($data, $campos);
    }
}
