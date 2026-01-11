<?php

function generarIndice(array $cantidades): array
{
    $data = [];
    $tema = 1;

    foreach ($cantidades as $cantidad) {

        $ejercicios = [];

        for ($i = 1; $i <= $cantidad; $i++) {
            $ejercicios[] = "ejercicio{$i}";
        }

        $data[] = [
            'titulo' => "tema{$tema}",
            'ejercicios' => $ejercicios
        ];

        $tema++;
    }

    return $data;
}
return generarIndice([
    12,
    11,
    19,29,15,34,9,5,4,3,2,4
]);