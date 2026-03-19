<?php

namespace Application\Tema10;

use Application\AbstractEjercicio;

class Ejercicio2 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = ['success' => true];

        // Acciones: 'listar', 'alta', 'baja', 'editar', 'modificar'
        $accion = $_POST['accion'] ?? 'listar';

        // El render esperará según acción:
        // accion = 'listar':
        //   data.respuesta.articulos → [{id, titulo, fecha, contenido}]
        //
        // accion = 'editar':
        //   data.respuesta.articulo  → {id, titulo, fecha, contenido} (para rellenar el formulario)
        //
        // accion = 'alta' | 'baja' | 'modificar':
        //   data.respuesta.mensaje   → mensaje de resultado

        // Tu lógica aquí (usando UPDATE para modificar)
        // $result['respuesta'] = ...

        return $result;
    }
}
