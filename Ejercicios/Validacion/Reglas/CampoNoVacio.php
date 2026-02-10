<?php
// 05_CampoNoVacio.php
// Validacion/Reglas/CampoNoVacio.php
namespace Ejercicios\Validacion\Reglas;

use Ejercicios\Validacion\Interfaces\ReglasValidacionInterface;

class CampoNoVacio implements ReglasValidacionInterface
{
    private string $mensajeError = '';

    public function validar($valor, string $etiqueta): bool
    {
        if (trim($valor) === '') {
            $this->mensajeError = "El campo {$etiqueta} no puede estar vacío";
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