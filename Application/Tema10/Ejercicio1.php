<?php

namespace Application\Tema10;

use Application\AbstractEjercicio;

class Ejercicio1 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = ['success' => true];

        // Acciones: 'listar', 'alta', 'baja'
        $accion = $_POST['accion'] ?? 'listar';

        // El render esperará según acción:
        // accion = 'listar':
        //   data.respuesta.articulos → [{id, titulo, fecha, contenido}]
        //
        // accion = 'alta':
        //   data.respuesta.mensaje   → 'Artículo publicado correctamente'
        //
        // accion = 'baja':
        //   data.respuesta.mensaje   → 'Artículo eliminado correctamente'

        // Tu lógica aquí (usando clase Articulo y BlogDB)
        // $result['respuesta'] = ...

        return $result;
    }
}
