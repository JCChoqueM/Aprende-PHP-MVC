<?php

namespace Ejercicios\Resultado;

class ResultadoHorario 
{
    public function __construct(
        private string $titulo,
        private string $periodo,
        private string $carrera,
        private array $semestres,
        private array $bloques
    ) {}

    public function render(): string
    {
        $html = '<table class="horario-universitario" border="5">';
        
        // Captions
        $html .= '<caption>' . htmlspecialchars($this->titulo) . '<br></caption>';
        $html .= '<caption>' . htmlspecialchars($this->periodo) . '<br></caption>';
        $html .= '<caption>' . htmlspecialchars($this->carrera) . '<br></caption>';
        
        // Header
        $html .= '<tr>';
        $html .= '<th>hora</th>';
        foreach ($this->semestres as $semestre) {
            $html .= '<th>' . htmlspecialchars($semestre) . '</th>';
        }
        $html .= '</tr>';
        
        // Bloques de horario
        foreach ($this->bloques as $bloque) {
            $html .= '<tr>';
            $html .= '<td>' . $bloque['hora'] . '</td>';
            
            foreach ($bloque['materias'] as $materia) {
                $html .= '<td>';
                if (!empty($materia['nombre'])) {
                    $html .= htmlspecialchars($materia['nombre']) . ' <br>';
                    $html .= htmlspecialchars($materia['docente']);
                } else {
                    $html .= '<br>'; // Celda vacía
                }
                $html .= '</td>';
            }
            
            $html .= '</tr>';
        }
        
        $html .= '</table>';
        
        return $html;
    }
}