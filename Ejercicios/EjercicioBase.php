<?php

namespace Ejercicios;

use Ejercicios\Contracts\EjercicioInterface;

abstract class EjercicioBase implements EjercicioInterface
{
    /**
     * Template method que construye la data completa
     */
    public static function obtenerData(int $tema, int $ejercicio): array
    {
        return [
            'tema' => "Tema {$tema}",
            'ejercicio' => "Ejercicio {$ejercicio}",
            'enunciado' => static::enunciado(),
            'resultado' => static::obtenerResultado(),
            'incluirFormulario' => static::obtenerConfiguracionFormulario(),
        ];
    }

    /**
     * Cada ejercicio implementa su enunciado
     */
    abstract protected static function enunciado(): string;

    /**
     * Obtener resultado (por defecto vacío si tiene formulario)
     */
    protected static function obtenerResultado(): mixed
    {
        return '';
    }

    /**
     * Configuración de formulario (por defecto sin formulario)
     */
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => false,
            'nombreFormulario' => '',
        ];
    }
}