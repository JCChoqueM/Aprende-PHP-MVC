<?php

namespace Ejercicios\Resultado;
class ResultadoTexto
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
