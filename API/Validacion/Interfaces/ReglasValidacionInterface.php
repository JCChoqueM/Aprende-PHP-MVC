<?php
// 01_ReglasValidacionInterface.php
// Validacion/Interfaces/ReglasValidacionInterface.php
namespace API\Validacion\Interfaces;

interface ReglasValidacionInterface
{
    /**
     * Valida un campo según la regla específica
     * @param mixed $valor Valor del campo a validar
     * @param string $etiqueta Nombre del campo para mensajes de error
     * @return bool True si es válido, False si no lo es
     */
    public function validar($valor, string $etiqueta): bool;
    
    /**
     * Obtiene el mensaje de error si la validación falla
     * @return string Mensaje de error
     */
    public function getMensajeError(): string;
}
?>