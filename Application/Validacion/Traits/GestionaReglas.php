<?php

namespace Application\Validacion\Traits;

trait GestionaReglas
{
    public function agregarRegla(string|object $regla): self
    {
        $this->reglas[] = $regla;
        return $this;
    }

    public function quitarRegla(string $regla): self
    {
        $this->reglas = array_filter(
            $this->reglas,
            fn($r) => $r !== $regla
        );
        return $this;
    }
}