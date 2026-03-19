<?php

namespace Application\Tema8;

use Application\AbstractEjercicio;

class Ejercicio1 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = ['success' => true];

        // Acciones posibles: 'listar', 'alta', 'baja', 'modificar'
        $accion = $_POST['accion'] ?? 'listar';

        // El render esperará según acción:
        // accion = 'listar':
        //   data.respuesta.clientes  → array de clientes [{id, nombre, dni, direccion, ...}]
        //
        // accion = 'alta':
        //   data.respuesta.mensaje   → 'Cliente dado de alta correctamente'
        //
        // accion = 'baja':
        //   data.respuesta.mensaje   → 'Cliente eliminado correctamente'
        //
        // accion = 'modificar':
        //   data.respuesta.mensaje   → 'Cliente modificado correctamente'

        // Tu lógica aquí (SELECT / INSERT / DELETE / UPDATE sobre tabla cliente)
        // $result['respuesta'] = ...

        return $result;
    }
}
