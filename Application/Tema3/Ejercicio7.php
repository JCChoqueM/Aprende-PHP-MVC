<?php

namespace Application\Tema3;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\Rango;

class Ejercicio7 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Nota 1', 'Nota 2', 'Nota 3'], [new Rango(0, 100)]);
        if (!$result['success']) return $result;

        ['Nota 1' => $nota1, 'Nota 2' => $nota2, 'Nota 3' => $nota3] = $result['input'];

        // El render esperará:
        // data.input['Nota 1'] → primera nota
        // data.input['Nota 2'] → segunda nota
        // data.input['Nota 3'] → tercera nota
        // data.respuesta       → media de las tres notas

        // Tu lógica aqui
        $media = ($nota1 + $nota2 + $nota3) / 3;
        $result['respuesta'] = round($media, 2);

        return $result;
    }
}
