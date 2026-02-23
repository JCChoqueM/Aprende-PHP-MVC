<?php
// 09_LongitudMinima.php
// Validacion/Reglas/LongitudMinima.php
namespace API\Validacion\Reglas;

use API\Validacion\Interfaces\ReglasValidacionInterface;

class LongitudMinima implements ReglasValidacionInterface
{
    private string $mensajeError = '';
    private int $minimo;

    public function __construct(int $minimo)
    {
        $this->minimo = $minimo;
    }

    public function validar($valor, string $etiqueta): bool
    {
        if (strlen(trim($valor)) < $this->minimo) {
            $this->mensajeError = "{$etiqueta} debe tener al menos {$this->minimo} caracteres";
            return false;
        }
        return true;
    }

    public function getMensajeError(): string
    {
        return $this->mensajeError;
    }
}
?>