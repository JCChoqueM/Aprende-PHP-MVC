<?php

namespace Application\Tema6;

use Application\AbstractEjercicio;

// ─── Ejercicio 20: generaArrayInt ────────────────────────────────────────────
class Ejercicio20 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Tamaño', 'Mínimo', 'Máximo']);
        if (!$result['success']) return $result;

        ['Tamaño' => $n, 'Mínimo' => $min, 'Máximo' => $max] = $result['input'];

        // El render esperará:
        // data.input.Tamaño   → tamaño del array
        // data.input.Mínimo   → valor mínimo
        // data.input.Máximo   → valor máximo
        // data.respuesta      → array generado

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}

// ─── Ejercicio 21: minimoArrayInt ────────────────────────────────────────────
class Ejercicio21 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = ['success' => true];

        // Genera un array automáticamente y devuelve el mínimo

        // El render esperará:
        // data.respuesta.array   → array generado
        // data.respuesta.minimo  → mínimo del array

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}

// ─── Ejercicio 22: maximoArrayInt ────────────────────────────────────────────
class Ejercicio22 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = ['success' => true];

        // El render esperará:
        // data.respuesta.array   → array generado
        // data.respuesta.maximo  → máximo del array

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}

// ─── Ejercicio 23: mediaArrayInt ─────────────────────────────────────────────
class Ejercicio23 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = ['success' => true];

        // El render esperará:
        // data.respuesta.array  → array generado
        // data.respuesta.media  → media del array

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}

// ─── Ejercicio 24: estaEnArrayInt ────────────────────────────────────────────
class Ejercicio24 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número']);
        if (!$result['success']) return $result;

        ['Número' => $n] = $result['input'];

        // El render esperará:
        // data.input.Número     → número a buscar
        // data.respuesta.array  → array generado
        // data.respuesta.estaEn → bool

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}

// ─── Ejercicio 25: posicionEnArray ───────────────────────────────────────────
class Ejercicio25 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número']);
        if (!$result['success']) return $result;

        ['Número' => $n] = $result['input'];

        // El render esperará:
        // data.input.Número       → número a buscar
        // data.respuesta.array    → array generado
        // data.respuesta.posicion → índice donde está (-1 si no existe)

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}

// ─── Ejercicio 26: volteaArrayInt ────────────────────────────────────────────
class Ejercicio26 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = ['success' => true];

        // El render esperará:
        // data.respuesta.original → array original
        // data.respuesta.volteado → array volteado

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}

// ─── Ejercicio 27: rotaDerechaArrayInt ───────────────────────────────────────
class Ejercicio27 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Posiciones']);
        if (!$result['success']) return $result;

        ['Posiciones' => $pos] = $result['input'];

        // El render esperará:
        // data.input.Posiciones    → posiciones a rotar
        // data.respuesta.original  → array original
        // data.respuesta.rotado    → array rotado a la derecha

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}

// ─── Ejercicio 28: rotaIzquierdaArrayInt ─────────────────────────────────────
class Ejercicio28 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Posiciones']);
        if (!$result['success']) return $result;

        ['Posiciones' => $pos] = $result['input'];

        // El render esperará:
        // data.input.Posiciones    → posiciones a rotar
        // data.respuesta.original  → array original
        // data.respuesta.rotado    → array rotado a la izquierda

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
