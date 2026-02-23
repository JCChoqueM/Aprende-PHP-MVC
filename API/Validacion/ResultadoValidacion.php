<?php
// 03_ResultadoValidacion.php
// Validacion/ResultadoValidacion.php
namespace API\Validacion;

class ResultadoValidacion
{
    private bool $valido;
    private array $errores;
    private array $datos;

    public function __construct(bool $valido, array $datos = [], array $errores = [])
    {
        $this->valido = $valido;
        $this->datos = $datos;
        $this->errores = $errores;
    }

    public function esValido(): bool
    {
        return $this->valido;
    }

    public function getDatos(): array
    {
        return $this->datos;
    }

    public function getErrores(): array
    {
        return $this->errores;
    }

    public function toArray(): array
    {
        return [
            'valido' => $this->valido,
            'datos' => $this->datos,
            'errores' => $this->errores
        ];
    }
}
?>