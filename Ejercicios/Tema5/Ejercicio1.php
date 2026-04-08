<?php

namespace Ejercicios\Tema5;

use Ejercicios\EjercicioBase;
use Ejercicios\Resultado\ResultadoTabla;

class Ejercicio1 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return ['formularioBool' => false];
    }

    protected static function enunciado(): string
    {
        return 'Define tres arrays de 20 números enteros cada una, con nombres "numero", "cuadrado" y "cubo". Carga el array "numero" con valores aleatorios entre 0 y 100. En el array "cuadrado" se deben almacenar los cuadrados de los valores que hay en el array "numero". En el array "cubo" se deben almacenar los cubos de los valores que hay en "numero". A continuación, muestra el contenido de los tres arrays dispuesto en tres columnas.';
    }

    protected static function obtenerResultado(): ResultadoTabla
    {
        $numero = [];
        $cuadrado = [];
        $cubo = [];

        // Generación de datos
        for ($i = 0; $i < 20; $i++) {
            $valor = rand(0, 100);

            $numero[] = $valor;
            $cuadrado[] = $valor ** 2;
            $cubo[] = $valor ** 3;
        }

        // Construcción de datos para la tabla
        $datos = [];

        // Cabecera
        $datos[] = ['Número', 'Cuadrado', 'Cubo'];

        // Filas
        for ($i = 0; $i < 20; $i++) {
            $datos[] = [
                $numero[$i],
                $cuadrado[$i],
                $cubo[$i]
            ];
        }

        return new ResultadoTabla(
            datos: $datos,
            headerBg: '#1e293b', // opcional
            tableClass: 'tabla-ejercicio',
            tdClass: 'celda',
            tableId: 'tabla-numeros'
        );
    }
}