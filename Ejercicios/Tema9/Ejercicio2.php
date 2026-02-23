<?php

namespace Ejercicios\Tema9;

use Ejercicios\EjercicioBase;

class Ejercicio2 extends EjercicioBase
{


    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario2',
            'dato1' => 'Base (metros)',
            'placeholder1' => 'Ingrese la base del rectángulo',
            'dato2' => 'Altura (metros)',
            'placeholder2' => 'Ingrese la altura del rectángulo',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Crea la clase Vehiculo, así como las clases Bicicleta y Coche como subclases de la primera. Para la
clase Vehiculo, crea los métodos de clase getVehiculosCreados() y getKmTotales(); así como el
método de instancia getKmRecorridos(). Crea también algún método específico para cada una de
las subclases. Prueba las clases creadas mediante una aplicación que realice, al menos, las siguientes
acciones:
• Anda con la bicicleta
• Haz el caballito con la bicicleta
• Anda con el coche
• Quema rueda con el coche
• Ver kilometraje de la bicicleta
• Ver kilometraje del coche
• Ver kilometraje total';
    }
}
