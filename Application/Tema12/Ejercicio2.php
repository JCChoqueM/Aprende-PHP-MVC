<?php

namespace Application\Tema12;

use Application\AbstractEjercicio;

class Ejercicio2 extends AbstractEjercicio
{
    // Ejemplo usando la API pública de GitHub como red social alternativa
    private const API_URL = 'https://api.github.com/users/';

    public static function procesar(): array
    {
        $result = self::validar(['Usuario']);
        if (!$result['success']) return $result;

        ['Usuario' => $usuario] = $result['input'];

        // Llama a la API de GitHub (no requiere clave)
        // GET https://api.github.com/users/{usuario}

        // El render esperará:
        // data.input.Usuario          → usuario buscado
        // data.respuesta.nombre       → nombre completo
        // data.respuesta.login        → nombre de usuario
        // data.respuesta.avatar       → URL del avatar
        // data.respuesta.bio          → biografía
        // data.respuesta.seguidores   → número de seguidores
        // data.respuesta.siguiendo    → número de seguidos
        // data.respuesta.repos        → número de repositorios públicos
        // data.respuesta.url          → URL del perfil

        // Tu lógica aquí
        // $url = self::API_URL . $usuario;
        // $datos = json_decode(file_get_contents($url), true);
        // $result['respuesta'] = ...

        return $result;
    }
}
