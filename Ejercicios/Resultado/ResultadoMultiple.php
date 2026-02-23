<?php

namespace Ejercicios\Resultado;
class ResultadoMultiple 
{
    private array $resultados = [];

    public function __construct(...$resultados)
    {
        $this->resultados = $resultados;
    }

    public function render(): string
    {
        $html = '';
        foreach ($this->resultados as $index => $resultado) {
            $html .= $resultado->render();
            
            // Agregar separación entre resultados (excepto el último)
            if ($index < count($this->resultados) - 1) {
                $html .= '';
            }
        }
        return $html;
    }
}