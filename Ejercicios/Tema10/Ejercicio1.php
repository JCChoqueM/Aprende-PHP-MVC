<?php

namespace Ejercicios\Tema10;

use Ejercicios\EjercicioBase;

class Ejercicio1 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return ['formularioBool' => false];
    }

    protected static function enunciado(): string
    {
        return 'Crea un blog con cabecera, artículos y pie de página. Los artículos se almacenan en una base de datos con título, fecha de publicación, contenido e identificador auto-incremental. Crea la clase BlogDB para aislar la conexión a BD. Crea la clase Articulo con los atributos de la tabla, constructor, getters/setters, y los métodos insert(), delete() y getArticulos().';
    }
}
