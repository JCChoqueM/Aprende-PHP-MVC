<?php

namespace Ejercicios\Tema9;

use Ejercicios\EjercicioBase;

class Ejercicio2 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario1',
            'dato1' => 'Kilómetros',
            'placeholder1' => 'Ingrese los km a recorrer',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Crea la clase Vehiculo, así como las clases Bicicleta y Coche como subclases. Para Vehiculo, crea los métodos de clase getVehiculosCreados() y getKmTotales(); así como el método de instancia getKmRecorridos(). Crea también métodos específicos para cada subclase. La aplicación debe permitir: andar con la bicicleta, hacer el caballito, andar con el coche, quemar rueda, ver kilometraje de cada vehículo y ver kilometraje total.';
    }
}
