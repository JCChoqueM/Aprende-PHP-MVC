<?php

namespace Application\Tema11;

use Application\AbstractEjercicio;

class Ejercicio1 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = ['success' => true];

        // Igual que Tema10 Ejercicio2 pero las vistas se renderizan con Twig
        // Acciones: 'listar', 'alta', 'baja', 'editar', 'modificar'
        $accion = $_POST['accion'] ?? 'listar';

        // El render esperará según acción:
        // accion = 'listar':
        //   data.respuesta.articulos → [{id, titulo, fecha, contenido}]
        //
        // accion = 'editar':
        //   data.respuesta.articulo  → {id, titulo, fecha, contenido}
        //
        // accion = 'alta' | 'baja' | 'modificar':
        //   data.respuesta.mensaje   → mensaje de resultado

        // Nota: en el proyecto real, aquí se renderizaría con Twig:
        // $twig->render('blog/listado.html.twig', ['articulos' => $articulos])
        // Para esta API devolvemos los datos en JSON para que el render JS los maneje

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
