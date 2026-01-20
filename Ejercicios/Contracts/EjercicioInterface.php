<?php

namespace Ejercicios\Contracts;

interface EjercicioInterface
{
    public static function enunciado(): string;

    public static function resolver(): mixed;
}
