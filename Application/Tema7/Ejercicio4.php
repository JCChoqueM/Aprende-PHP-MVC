<?php

namespace Application\Tema7;

use Application\AbstractEjercicio;

class Ejercicio4 extends AbstractEjercicio
{
    private const USUARIOS = [
        'admin' => '1234',
        'user'  => 'abcd',
    ];

    public static function procesar(): array
    {
        $result = self::validar(['Usuario', 'Contraseña']);
        if (!$result['success']) return $result;

        ['Usuario' => $usuario, 'Contraseña' => $contrasena] = $result['input'];

        // El render esperará:
        // data.input.Usuario       → usuario introducido
        // data.respuesta.acceso    → bool (true si credenciales correctas)
        // data.respuesta.mensaje   → 'Bienvenido {usuario}' o 'Usuario o contraseña incorrectos'

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
