<?php

namespace Application\Tema3;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\Rango;

class Ejercicio8 extends AbstractEjercicio
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
        // data.respuesta.media      → media de las tres notas
        // data.respuesta.calificacion → insuficiente, suficiente, bien, notable o sobresaliente

        // Tu lógica aqui
        $media = ($nota1 + $nota2 + $nota3) / 3;
        $result['respuesta']['media'] = round($media, 2);
        if ($media < 51) {
            $result['respuesta']['calificacion'] = 'Insuficiente';
        } elseif ($media < 60) {
            $result['respuesta']['calificacion'] = 'Suficiente';
        } elseif ($media < 75) {
            $result['respuesta']['calificacion'] = 'Bien';
        } elseif ($media < 91) {
            $result['respuesta']['calificacion'] = 'Notable';
        } else {
            $result['respuesta']['calificacion'] = 'Sobresaliente';
        }

        return $result;
    }
}