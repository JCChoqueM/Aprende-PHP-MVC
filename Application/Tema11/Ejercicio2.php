<?php

namespace Application\Tema11;

use Application\AbstractEjercicio;

class Ejercicio2 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = ['success' => true];

        // Igual que Ejercicio1 pero con herencia de plantillas Twig:
        // base.html.twig        → plantilla base con cabecera y pie
        //   └── listado.html.twig   → extiende base, bloque 'contenido'
        //   └── editar.html.twig    → extiende base, bloque 'contenido'
        //   └── mensaje.html.twig   → extiende base, bloque 'contenido'

        // Acciones: 'listar', 'alta', 'baja', 'editar', 'modificar'
        $accion = $_POST['accion'] ?? 'listar';

        // El render esperará igual que Ejercicio1:
        // accion = 'listar':
        //   data.respuesta.articulos → [{id, titulo, fecha, contenido}]
        //
        // accion = 'editar':
        //   data.respuesta.articulo  → {id, titulo, fecha, contenido}
        //
        // accion = 'alta' | 'baja' | 'modificar':
        //   data.respuesta.mensaje   → mensaje de resultado

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
