<?php

namespace Ejercicios\Resultado;

use Ejercicios\Contracts\RenderableInterface;

class ResultadoTabla implements RenderableInterface
{
    public function __construct(
        private array $datos,             // datos de la tabla
        private ?string $headerBg = null, // color de fondo opcional para la primera fila
        private ?string $tableClass = null, // clase CSS para la tabla
        private ?string $tdClass = null,    // clase CSS para las celdas
        private ?string $tableId = null     // id único para la tabla
    ) {}

    public function render(): string
    {
        $html = '<table border="1"';
        
        if ($this->tableClass) {
            $html .= " class='{$this->tableClass}'";
        }
        if ($this->tableId) {
            $html .= " id='{$this->tableId}'";
        }

        $html .= '>';

        $primeraFila = true;
        foreach ($this->datos as $fila) {
            $html .= '<tr>';
            foreach ($fila as $celda) {
                if ($primeraFila && $this->headerBg) {
                    $html .= '<th style="background-color:' . $this->headerBg . '"'
                        . ($this->tdClass ? " class='{$this->tdClass}'" : "") . '>'
                        . htmlspecialchars((string)$celda) .
                        '</th>';
                } else {
                    $html .= '<td' . ($this->tdClass ? " class='{$this->tdClass}'" : "") . '>'
                        . htmlspecialchars((string)$celda) .
                        '</td>';
                }
            }
            $html .= '</tr>';
            $primeraFila = false;
        }

        $html .= '</table>';
        return $html;
    }
}
