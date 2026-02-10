<?php
// 10_Validador.php
// Validacion/Validador.php
namespace Ejercicios\Validacion;

use Ejercicios\Validacion\Interfaces\ValidadorInterface;
use Ejercicios\Validacion\Interfaces\ReglasValidacionInterface;

class Validador implements ValidadorInterface
{
    private array $reglas = [];
    private array $errores = [];
    private array $etiquetas = [];

    /**
     * Define las etiquetas de los campos
     */
    public function setEtiquetas(array $etiquetas): self
    {
        $this->etiquetas = $etiquetas;
        return $this;
    }

    /**
     * Agrega una regla de validación a un campo
     */
    public function agregarRegla(string $campo, ReglasValidacionInterface $regla): self
    {
        if (!isset($this->reglas[$campo])) {
            $this->reglas[$campo] = [];
        }
        
        $this->reglas[$campo][] = $regla;
        return $this;
    }

    /**
     * Agrega múltiples reglas a un campo
     */
    public function agregarReglas(string $campo, array $reglas): self
    {
        foreach ($reglas as $regla) {
            $this->agregarRegla($campo, $regla);
        }
        return $this;
    }

    /**
     * Valida los datos según las reglas definidas
     */
    public function validar(array $datos): array
    {
        $this->errores = [];
        $datosValidados = [];

        foreach ($this->reglas as $campo => $reglasCampo) {
            $etiqueta = $this->etiquetas[$campo] ?? $campo;
            $valor = $datos[$campo] ?? null;

            $campoValido = true;

            foreach ($reglasCampo as $regla) {
                if (!$regla->validar($valor, $etiqueta)) {
                    $this->errores[] = $regla->getMensajeError();
                    $campoValido = false;
                    break; // Detener en el primer error del campo
                }
            }

            if ($campoValido && $valor !== null) {
                // Convertir a número si es numérico
                $datosValidados[$campo] = is_numeric($valor) ? floatval($valor) : trim($valor);
            }
        }

        if (!empty($this->errores)) {
            return (new ResultadoValidacion(false, [], $this->errores))->toArray();
        }

        return (new ResultadoValidacion(true, $datosValidados))->toArray();
    }

    /**
     * Agrega un error manualmente
     */
    public function agregarError(string $error): void
    {
        $this->errores[] = $error;
    }

    /**
     * Obtiene los errores acumulados
     */
    public function getErrores(): array
    {
        return $this->errores;
    }
}
?>