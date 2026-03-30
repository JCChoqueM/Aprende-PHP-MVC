<?php

namespace Application\Tema3;

use Application\AbstractEjercicio;

class Ejercicio13 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número 1', 'Número 2', 'Número 3']);
        if (!$result['success']) return $result;

        ['Número 1' => $a, 'Número 2' => $b, 'Número 3' => $c] = $result['input'];

        // El render esperará:
        // data.input['Número 1'] → primer número
        // data.input['Número 2'] → segundo número
        // data.input['Número 3'] → tercer número
        // data.respuesta         → números ordenados de menor a mayor

        // Tu lógica aqui
    $aux=null;
    if($a>$b){
        $aux=$a;
        $a=$b;
        $b=$aux;
    }
    if($b>$c){
        $aux=$b;
        $b=$c;
        $c=$aux;
    }
    if($a>$b){
        $aux=$a;
        $a=$b;
        $b=$aux;
    }
    $result['respuesta'] = [$a,$b,$c];

        return $result;
    }
}