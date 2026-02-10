<?php
// 07_ValorPositivo.php
// Validacion/Reglas/ValorPositivo.php
namespace Ejercicios\Validacion\Reglas;

use Ejercicios\Validacion\Interfaces\ReglasValidacionInterface;

class ValorPositivo implements ReglasValidacionInterface
{
    private string $mensajeError = '';
    private bool $incluirCero;

    public function __construct(bool $incluirCero = false)
    {
        $this->incluirCero = $incluirCero;
    }

    public function validar($valor, string $etiqueta): bool
    {
        $valorNumerico = floatval($valor);
        
        if ($this->incluirCero) {
            if ($valorNumerico < 0) {
                $this->mensajeError = "{$etiqueta} debe ser mayor o igual a 0";
                return false;
            }
        } else {
            if ($valorNumerico <= 0) {
                $this->mensajeError = "{$etiqueta} debe ser mayor que 0";
                return false;
            }
        }
        
        return true;
    }

    public function getMensajeError(): string
    {
        return $this->mensajeError;
    }
}
?>