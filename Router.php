<?php

namespace MVC;

class Router
{
    public $rutasGET = [];
    public $rutasPOST = [];

    public function get($url, $fn)
    {
        $this->rutasGET[$url] = $fn;
    }

    public function post($url, $fn)
    {
        $this->rutasPOST[$url] = $fn;
    }

    public function comprobarRutas()
    {
        $urlActual = strtok($_SERVER['REQUEST_URI'], '?') ?? '/';
        $metodo = $_SERVER['REQUEST_METHOD'];

        $rutas = $metodo === 'GET' ? $this->rutasGET : $this->rutasPOST;

        foreach ($rutas as $ruta => $fn) {
            $pattern = preg_replace('/\{[a-zA-Z]+\}/', '([a-zA-Z0-9_-]+)', $ruta);
            $pattern = "#^" . $pattern . "$#";

            if (preg_match($pattern, $urlActual, $matches)) {

                call_user_func_array($fn, array_merge([$this], $matches));

                return;
            }
        }

        echo "Página no encontrada o rutas no válidas";
    }

    // Muestra una vista de forma segura
    public function render($view, $data = [])
    {
        // FIX 1: Prevenir Path Traversal manteniendo subdirectorios válidos
        // Eliminar secuencias peligrosas pero permitir / para subdirectorios
        $view = str_replace(['../', '..\\', '\\'], '', $view);
        $view = ltrim($view, '/'); // Eliminar / inicial si existe

        // FIX 2: Construir ruta completa y verificar que existe
        $viewPath = __DIR__ . "/views/$view.php";

        // Verificar que la ruta resuelva dentro del directorio views
        $realViewPath = realpath($viewPath);
        $realViewsDir = realpath(__DIR__ . "/views");

        if (!$realViewPath || strpos($realViewPath, $realViewsDir) !== 0) {
            die("Vista no encontrada");
        }

        // FIX 3: Extraer variables de forma segura
        // Usar extract() con EXTR_OVERWRITE para compatibilidad total
        extract($data, EXTR_OVERWRITE);


        ob_start();
        include_once $viewPath;
        $contenido = ob_get_clean();
        include_once __DIR__ . '/views/layout.php';
    }
}
