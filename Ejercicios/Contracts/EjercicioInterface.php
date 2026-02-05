<?php

namespace Ejercicios\Contracts;

interface EjercicioInterface
{
    /**
     * Retorna todos los datos necesarios para renderizar el ejercicio
     * incluyendo metadata de tema y ejercicio
     * 
     * @param int $tema Número del tema
     * @param int $ejercicio Número del ejercicio
     * @return array Todos los datos para la vista
     */
    public static function obtenerData(int $tema, int $ejercicio): array;
}