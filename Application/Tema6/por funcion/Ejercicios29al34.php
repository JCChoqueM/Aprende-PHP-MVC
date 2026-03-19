<?php

namespace Application\Tema6;

use Application\AbstractEjercicio;

// ─── Ejercicio 29: generaArrayBiInt ──────────────────────────────────────────
class Ejercicio29 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Filas', 'Columnas', 'Mínimo', 'Máximo']);
        if (!$result['success']) return $result;

        ['Filas' => $filas, 'Columnas' => $cols, 'Mínimo' => $min, 'Máximo' => $max] = $result['input'];

        // El render esperará:
        // data.input.Filas    → número de filas
        // data.input.Columnas → número de columnas
        // data.input.Mínimo   → valor mínimo
        // data.input.Máximo   → valor máximo
        // data.respuesta      → matriz generada

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}

// ─── Ejercicio 30: filaDeArrayBiInt ──────────────────────────────────────────
class Ejercicio30 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Fila']);
        if (!$result['success']) return $result;

        ['Fila' => $fila] = $result['input'];

        // El render esperará:
        // data.input.Fila        → índice de la fila
        // data.respuesta.matriz  → matriz generada
        // data.respuesta.fila    → fila extraída

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}

// ─── Ejercicio 31: columnaDeArrayBiInt ───────────────────────────────────────
class Ejercicio31 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Columna']);
        if (!$result['success']) return $result;

        ['Columna' => $col] = $result['input'];

        // El render esperará:
        // data.input.Columna     → índice de la columna
        // data.respuesta.matriz  → matriz generada
        // data.respuesta.columna → columna extraída

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}

// ─── Ejercicio 32: coordenadasEnArrayBiInt ───────────────────────────────────
class Ejercicio32 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número']);
        if (!$result['success']) return $result;

        ['Número' => $n] = $result['input'];

        // El render esperará:
        // data.input.Número          → número a buscar
        // data.respuesta.matriz      → matriz generada
        // data.respuesta.coordenadas → [fila, col] o [-1, -1]

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}

// ─── Ejercicio 33: esPuntoDeSilla ────────────────────────────────────────────
class Ejercicio33 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Fila', 'Columna']);
        if (!$result['success']) return $result;

        ['Fila' => $fila, 'Columna' => $col] = $result['input'];

        // El render esperará:
        // data.input.Fila             → fila del elemento
        // data.input.Columna          → columna del elemento
        // data.respuesta.matriz       → matriz generada
        // data.respuesta.esPuntoDeSilla → bool

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}

// ─── Ejercicio 34: diagonal ──────────────────────────────────────────────────
class Ejercicio34 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Fila', 'Columna', 'Dirección']);
        if (!$result['success']) return $result;

        ['Fila' => $fila, 'Columna' => $col, 'Dirección' => $dir] = $result['input'];

        // El render esperará:
        // data.input.Fila          → fila de inicio
        // data.input.Columna       → columna de inicio
        // data.input.Dirección     → 'nose' o 'neso'
        // data.respuesta.matriz    → matriz generada
        // data.respuesta.diagonal  → array con los elementos de la diagonal

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
