<?php

namespace Application\Tema6;

use Application\AbstractEjercicio;

// ─── Ejercicio 1: esCapicua ───────────────────────────────────────────────────
class Ejercicio1 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número']);
        if (!$result['success']) return $result;

        ['Número' => $n] = $result['input'];

        // El render esperará:
        // data.input.Número   → número introducido
        // data.respuesta      → bool (true si es capicúa)

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}

// ─── Ejercicio 2: esPrimo ────────────────────────────────────────────────────
class Ejercicio2 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número']);
        if (!$result['success']) return $result;

        ['Número' => $n] = $result['input'];

        // El render esperará:
        // data.input.Número   → número introducido
        // data.respuesta      → bool (true si es primo)

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}

// ─── Ejercicio 3: siguientePrimo ─────────────────────────────────────────────
class Ejercicio3 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número']);
        if (!$result['success']) return $result;

        ['Número' => $n] = $result['input'];

        // El render esperará:
        // data.input.Número   → número introducido
        // data.respuesta      → el menor primo mayor al número

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}

// ─── Ejercicio 4: potencia ───────────────────────────────────────────────────
class Ejercicio4 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Base', 'Exponente']);
        if (!$result['success']) return $result;

        ['Base' => $base, 'Exponente' => $exponente] = $result['input'];

        // El render esperará:
        // data.input.Base      → base
        // data.input.Exponente → exponente
        // data.respuesta       → resultado de la potencia

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}

// ─── Ejercicio 5: digitos ────────────────────────────────────────────────────
class Ejercicio5 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número']);
        if (!$result['success']) return $result;

        ['Número' => $n] = $result['input'];

        // El render esperará:
        // data.input.Número   → número introducido
        // data.respuesta      → cantidad de dígitos

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}

// ─── Ejercicio 6: voltea ─────────────────────────────────────────────────────
class Ejercicio6 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número']);
        if (!$result['success']) return $result;

        ['Número' => $n] = $result['input'];

        // El render esperará:
        // data.input.Número   → número introducido
        // data.respuesta      → número al revés

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}

// ─── Ejercicio 7: digitoN ────────────────────────────────────────────────────
class Ejercicio7 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número', 'Posición']);
        if (!$result['success']) return $result;

        ['Número' => $n, 'Posición' => $pos] = $result['input'];

        // El render esperará:
        // data.input.Número    → número introducido
        // data.input.Posición  → posición del dígito (0 = izquierda)
        // data.respuesta       → dígito en esa posición

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}

// ─── Ejercicio 8: posicionDeDigito ───────────────────────────────────────────
class Ejercicio8 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número', 'Dígito']);
        if (!$result['success']) return $result;

        ['Número' => $n, 'Dígito' => $digito] = $result['input'];

        // El render esperará:
        // data.input.Número   → número introducido
        // data.input.Dígito   → dígito a buscar
        // data.respuesta      → posición de la primera ocurrencia (-1 si no existe)

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}

// ─── Ejercicio 9: quitaPorDetras ─────────────────────────────────────────────
class Ejercicio9 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número', 'Cantidad']);
        if (!$result['success']) return $result;

        ['Número' => $n, 'Cantidad' => $cantidad] = $result['input'];

        // El render esperará:
        // data.input.Número    → número introducido
        // data.input.Cantidad  → dígitos a quitar por detrás
        // data.respuesta       → número resultante

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}

// ─── Ejercicio 10: quitaPorDelante ───────────────────────────────────────────
class Ejercicio10 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número', 'Cantidad']);
        if (!$result['success']) return $result;

        ['Número' => $n, 'Cantidad' => $cantidad] = $result['input'];

        // El render esperará:
        // data.input.Número    → número introducido
        // data.input.Cantidad  → dígitos a quitar por delante
        // data.respuesta       → número resultante

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}

// ─── Ejercicio 11: pegaPorDetras ─────────────────────────────────────────────
class Ejercicio11 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número', 'Dígito']);
        if (!$result['success']) return $result;

        ['Número' => $n, 'Dígito' => $digito] = $result['input'];

        // El render esperará:
        // data.input.Número   → número introducido
        // data.input.Dígito   → dígito a añadir por detrás
        // data.respuesta      → número resultante

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}

// ─── Ejercicio 12: pegaPorDelante ────────────────────────────────────────────
class Ejercicio12 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número', 'Dígito']);
        if (!$result['success']) return $result;

        ['Número' => $n, 'Dígito' => $digito] = $result['input'];

        // El render esperará:
        // data.input.Número   → número introducido
        // data.input.Dígito   → dígito a añadir por delante
        // data.respuesta      → número resultante

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}

// ─── Ejercicio 13: trozoDeNumero ─────────────────────────────────────────────
class Ejercicio13 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número', 'Posición inicial', 'Posición final']);
        if (!$result['success']) return $result;

        ['Número' => $n, 'Posición inicial' => $ini, 'Posición final' => $fin] = $result['input'];

        // El render esperará:
        // data.input.Número            → número introducido
        // data.input['Posición inicial'] → posición inicial
        // data.input['Posición final']   → posición final
        // data.respuesta               → trozo del número

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}

// ─── Ejercicio 14: juntaNumeros ──────────────────────────────────────────────
class Ejercicio14 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número 1', 'Número 2']);
        if (!$result['success']) return $result;

        ['Número 1' => $n1, 'Número 2' => $n2] = $result['input'];

        // El render esperará:
        // data.input['Número 1']  → primer número
        // data.input['Número 2']  → segundo número
        // data.respuesta          → números pegados formando uno solo

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
