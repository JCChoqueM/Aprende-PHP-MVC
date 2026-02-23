<?php
// 04_CampoRequerido.php
// Validacion/Reglas/CampoRequerido.php
namespace API\Validacion\Reglas;

use API\Validacion\Interfaces\ReglasValidacionInterface;

class CampoRequerido implements ReglasValidacionInterface
{
    private string $mensajeError = '';

    public function validar($valor, string $etiqueta): bool
    {
        if ($valor === null || $valor === '') {
            $this->mensajeError = "El campo {$etiqueta} es requerido";
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