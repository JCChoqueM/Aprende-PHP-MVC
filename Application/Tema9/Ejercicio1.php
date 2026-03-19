<?php

namespace Application\Tema9;

use Application\AbstractEjercicio;

class Ejercicio1 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = ['success' => true];

        // Instancia objetos de cada clase y aplica sus métodos
        // El render esperará:
        // data.respuesta → array de animales con sus acciones:
        // [
        //   { animal: 'Gato', clase: 'Mamifero', acciones: ['maulla', 'ronronea', 'araña'] },
        //   { animal: 'Perro', clase: 'Mamifero', acciones: ['ladra', 'corre', 'mueve la cola'] },
        //   { animal: 'Canario', clase: 'Ave', acciones: ['canta', 'vuela', 'pía'] },
        //   { animal: 'Pingüino', clase: 'Ave', acciones: ['nada', 'camina', 'no puede volar'] },
        //   { animal: 'Lagarto', clase: 'Reptil', acciones: ['trepa', 'muda la piel', 'caza insectos'] },
        // ]

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
