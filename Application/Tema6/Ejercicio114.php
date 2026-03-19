<?php

namespace Application\Tema6;

use Application\AbstractEjercicio;

class Ejercicio114 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número']);
        if (!$result['success']) return $result;

        ['Número' => $n] = $result['input'];

        // El render esperará:
        // data.input.Número              → número introducido
        // data.respuesta.esCapicua       → bool
        // data.respuesta.esPrimo         → bool
        // data.respuesta.siguientePrimo  → número
        // data.respuesta.digitos         → cantidad de dígitos
        // data.respuesta.voltea          → número al revés
        // data.respuesta.digitoN         → dígito en posición 0 (ejemplo)
        // data.respuesta.posicionDeDigito → posición del primer dígito encontrado
        // data.respuesta.quitaPorDetras  → número sin el último dígito
        // data.respuesta.quitaPorDelante → número sin el primer dígito
        // data.respuesta.pegaPorDetras   → número con un 5 añadido al final
        // data.respuesta.pegaPorDelante  → número con un 5 añadido al principio
        // data.respuesta.trozoDeNumero   → trozo entre posición 0 y 1
        // data.respuesta.juntaNumeros    → número pegado consigo mismo

        // Tu lógica aquí
        // $result['respuesta'] = [
        //     'esCapicua'        => esCapicua($n),
        //     'esPrimo'          => esPrimo($n),
        //     'siguientePrimo'   => siguientePrimo($n),
        //     'digitos'          => digitos($n),
        //     'voltea'           => voltea($n),
        //     'digitoN'          => digitoN($n, 0),
        //     'posicionDeDigito' => posicionDeDigito($n, digitoN($n, 0)),
        //     'quitaPorDetras'   => quitaPorDetras($n, 1),
        //     'quitaPorDelante'  => quitaPorDelante($n, 1),
        //     'pegaPorDetras'    => pegaPorDetras($n, 5),
        //     'pegaPorDelante'   => pegaPorDelante($n, 5),
        //     'trozoDeNumero'    => trozoDeNumero($n, 0, 1),
        //     'juntaNumeros'     => juntaNumeros($n, $n),
        // ];

        return $result;
    }
}
