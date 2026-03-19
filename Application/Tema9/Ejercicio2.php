<?php

namespace Application\Tema9;

use Application\AbstractEjercicio;

class Ejercicio2 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Kilómetros']);
        if (!$result['success']) return $result;

        ['Kilómetros' => $km] = $result['input'];

        // Usa sesiones para acumular km entre peticiones
        // Acciones: 'andarBici', 'caballito', 'andarCoche', 'quemarRueda', 'stats'
        $accion = $_POST['accion'] ?? 'stats';

        // El render esperará:
        // data.input.Kilómetros          → km introducidos
        // data.respuesta.accion          → acción realizada
        // data.respuesta.mensaje         → descripción de la acción
        // data.respuesta.kmBicicleta     → km totales de la bicicleta
        // data.respuesta.kmCoche         → km totales del coche
        // data.respuesta.kmTotales       → km totales de todos los vehículos
        // data.respuesta.vehiculosCreados → total de vehículos creados

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
