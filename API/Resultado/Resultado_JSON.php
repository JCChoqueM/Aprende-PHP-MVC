<?php

namespace API\Resultado;

/**
 * Resultado_JSON - Retorna datos estructurados sin formateo HTML
 * 
 * Permite que JavaScript sea responsable de toda la presentación.
 * La API solo entrega datos puros.  
 * 
 * Estructura:
 * {
 *   "type": "...",
 *   "ok": true,
 *   "operandos": { ... },
 *   "resultados": { ... }
 * }
 */
class Resultado_JSON implements Resultado_Interface
{
    private string $type;
    private array $operandos;
    private array $resultados;

    /**
     * @param string $type Tipo de resultado (multiplicacion, area, etc)
     * @param array $operandos Datos de entrada/operandos
     * @param array $resultados Datos calculados/resultados
     */
    public function __construct(string $type, array $operandos, array $resultados)
    {
        $this->type = $type;
        $this->operandos = $operandos;
        $this->resultados = $resultados;
    }

    public function toArray(): array
    {
        return [
            'type' => $this->type,
            'ok' => true,
            'operandos' => $this->operandos,
            'resultados' => $this->resultados
        ];
    }
}
