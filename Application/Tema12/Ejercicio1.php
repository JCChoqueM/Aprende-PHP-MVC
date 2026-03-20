<?php

namespace Application\Tema12;

use Application\AbstractEjercicio;

class Ejercicio1 extends AbstractEjercicio
{
    private const API_KEY = 'TU_API_KEY_OPENWEATHERMAP';
    private const API_URL = 'https://api.openweathermap.org/data/2.5/weather';

    public static function procesar(): array
    {
        $result = self::validar(['Ciudad']);
        if (!$result['success']) return $result;

        ['Ciudad' => $ciudad] = $result['input'];

        // Llama a la API de OpenWeatherMap
        // GET https://api.openweathermap.org/data/2.5/weather?q={ciudad}&appid={key}&units=metric&lang=es

        // El render esperará:
        // data.input.Ciudad              → ciudad buscada
        // data.respuesta.ciudad          → nombre de la ciudad
        // data.respuesta.pais            → código del país
        // data.respuesta.temperatura     → temperatura actual en °C
        // data.respuesta.sensacionTermica → sensación térmica en °C
        // data.respuesta.descripcion     → descripción del tiempo (ej: 'cielo despejado')
        // data.respuesta.humedad         → humedad en %
        // data.respuesta.viento          → velocidad del viento en m/s
        // data.respuesta.icono           → código del icono de OpenWeatherMap

        // Tu lógica aquí
        // $url = self::API_URL . "?q={$ciudad}&appid=" . self::API_KEY . "&units=metric&lang=es";
        // $datos = json_decode(file_get_contents($url), true);
        // $result['respuesta'] = ...

        return $result;
    }
}
