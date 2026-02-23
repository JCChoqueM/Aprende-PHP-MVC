<?php
// 02_ValidadorInterface.php
// Validacion/Interfaces/ValidadorInterface.php
namespace API\Validacion\Interfaces;

interface ValidadorInterface
{
    public function validar(array $datos): array;
    public function agregarRegla(string $campo, ReglasValidacionInterface $regla): self;
    public function agregarError(string $error): void;
}
