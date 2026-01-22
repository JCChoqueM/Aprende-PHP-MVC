<?php

namespace Ejercicios\Resultado;

use Ejercicios\Contracts\RenderableInterface;

class ResultadoMultiple implements RenderableInterface
{
    private array $resultados = [];

    public function __construct(RenderableInterface ...$resultados)
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