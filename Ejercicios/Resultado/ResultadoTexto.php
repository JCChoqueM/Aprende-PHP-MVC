<?php

namespace Ejercicios\Resultado;

use Ejercicios\Contracts\RenderableInterface;

class ResultadoTexto implements RenderableInterface
{
    public function __construct(
        private string $contenido
    ) {}

    public function render(): string
    {
        return '<pre class="ascii-output">' .
            htmlspecialchars($this->contenido, ENT_QUOTES, 'UTF-8') .
            '</pre>';
    }
}
