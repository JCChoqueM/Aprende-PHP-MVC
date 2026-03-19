<?php

namespace Application\Tema8;

use Application\AbstractEjercicio;

class Ejercicio2 extends AbstractEjercicio
{
    private const POR_PAGINA = 10;

    public static function procesar(): array
    {
        $result = ['success' => true];

        $accion  = $_POST['accion'] ?? 'listar';
        $pagina  = (int)($_POST['pagina'] ?? 1);

        // El render esperará según acción:
        // accion = 'listar':
        //   data.respuesta.clientes     → array de clientes de la página actual
        //   data.respuesta.paginaActual → página actual
        //   data.respuesta.totalPaginas → total de páginas
        //
        // accion = 'alta':
        //   data.respuesta.exito    → bool
        //   data.respuesta.mensaje  → 'Cliente dado de alta' o 'Ya existe un cliente con ese DNI'
        //
        // accion = 'confirmarBaja':
        //   data.respuesta.cliente  → datos del cliente a eliminar (para mostrar confirmación)
        //
        // accion = 'baja':
        //   data.respuesta.mensaje  → 'Cliente eliminado correctamente'
        //
        // accion = 'modificar':
        //   data.respuesta.mensaje  → 'Cliente modificado correctamente'

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
