<?php

namespace Ejercicios\Resultado;

use Ejercicios\Contracts\RenderableInterface;

class ResultadoHTML implements RenderableInterface
{
    private string $contenido;

    public function __construct(string $contenido)
    {
        $this->contenido = $contenido;
    }

    public function render(): string
    {
        // Aquí asumimos que $contenido ya contiene HTML seguro
        return '<div class="ascii-output">' . $this->contenido . '</div>';
    }
}
