<?php
// 06_CampoNumerico.php
// Validacion/Reglas/CampoNumerico.php
namespace API\Validacion\Reglas;

use API\Validacion\Interfaces\ReglasValidacionInterface;

class CampoNumerico implements ReglasValidacionInterface
{
    private string $mensajeError = '';

    public function validar($valor, string $etiqueta): bool
    {
        if (!is_numeric($valor)) {
            $this->mensajeError = "{$etiqueta} debe ser un valor numérico";
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