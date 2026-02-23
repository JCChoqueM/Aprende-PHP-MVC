<?php
// 08_RangoValor.php
// Validacion/Reglas/RangoValor.php
namespace API\Validacion\Reglas;

use API\Validacion\Interfaces\ReglasValidacionInterface;

class RangoValor implements ReglasValidacionInterface
{
    private string $mensajeError = '';
    private ?float $minimo;
    private ?float $maximo;

    public function __construct(?float $minimo = null, ?float $maximo = null)
    {
        $this->minimo = $minimo;
        $this->maximo = $maximo;
    }

    public function validar($valor, string $etiqueta): bool
    {
        $valorNumerico = floatval($valor);

        if ($this->minimo !== null && $valorNumerico < $this->minimo) {
            $this->mensajeError = "{$etiqueta} debe ser mayor o igual a {$this->minimo}";
            return false;
        }

        if ($this->maximo !== null && $valorNumerico > $this->maximo) {
            $this->mensajeError = "{$etiqueta} debe ser menor o igual a {$this->maximo}";
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