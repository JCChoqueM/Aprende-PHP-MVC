<?php

namespace Ejercicios\Tema10;

use Ejercicios\EjercicioBase;

class Ejercicio1 extends EjercicioBase
{
    public static function procesar(): array
    {
        // Validar entrada
        $validacion = self::validarEntrada();
        if (!$validacion['valido']) {
            http_response_code(400);
            return [
                'error' => true,
                'mensaje' => implode('<br>', $validacion['errores'])
            ];
        }

        $base = $validacion['datos']['base'];
        $altura = $validacion['datos']['altura'];

        // Calcular área
        $area = $base * $altura;

        // Retornar mensaje formateado
        http_response_code(200);
        return [
            'error' => false,
            'mensaje' => "El área del rectángulo con base {$base}m y altura {$altura}m es: {$area}m²"
        ];
    }

    private static function validarEntrada(): array
    {
        $errores = [];

        // Validar que existan los campos
        if (!isset($_POST['campo1']) || !isset($_POST['campo2'])) {
            $errores[] = 'Los campos base y altura son requeridos';
            return ['valido' => false, 'errores' => $errores];
        }

        // Validar que no estén vacíos
        if (trim($_POST['campo1']) === '' || trim($_POST['campo2']) === '') {
            $errores[] = 'Los campos no pueden estar vacíos';
            return ['valido' => false, 'errores' => $errores];
        }

        // Validar que sean numéricos
        if (!is_numeric($_POST['campo1'])) {
            $errores[] = 'La base debe ser un valor numérico';
        }
        if (!is_numeric($_POST['campo2'])) {
            $errores[] = 'La altura debe ser un valor numérico';
        }

        if (!empty($errores)) {
            return ['valido' => false, 'errores' => $errores];
        }

        $base = floatval($_POST['campo1']);
        $altura = floatval($_POST['campo2']);

        // Validar que sean positivos
        if ($base <= 0) {
            $errores[] = 'La base debe ser mayor que 0';
        }
        if ($altura <= 0) {
            $errores[] = 'La altura debe ser mayor que 0';
        }

        if (!empty($errores)) {
            return ['valido' => false, 'errores' => $errores];
        }

        return [
            'valido' => true,
            'datos' => [
                'base' => $base,
                'altura' => $altura
            ]
        ];
    }

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
        return 'Crea un blog siguiendo las pautas que se marcan a continuación:
a) En un blog hay como mínimo una cabecera, una serie de artículos y un pie de página.
b) Los artículos se almacenan en una base de datos. Sobre cada artículo se debe saber al menos
el título, la fecha de publicación (o fecha y hora) y el contenido. Además cada artículo tendrá un
identificador o código único (puede ser un código que se auto-incremente).
c) El identificador puede ser un número que se vaya incrementando él solo.
d) La fecha se puede coger del sistema cuando se graba un nuevo artículo.
e) Crea la clase BlogDB para aislar los datos de la conexión a la base de datos donde se guardan los
artículos.
f) Crea la clase Articulo con los mismos atributos que campos hay en la tabla articulo de la base
de datos. Esta clase debe tener implementado el constructor y opcionalmente los getter y setter (se
pueden crear de forma automática con Alt + Insert).
g) La clase Articulo tendrá también los métodos insert y delete, que deben insertar y borrar
respectivamente un artículo de la base de datos.
h) La clase Articulo debe tener también un método de clase getArticulos() que devuelva en un
array todos los artículos de la base de datos.';
    }
}