<?php

namespace Ejercicios\Tema1;

use Ejercicios\EjercicioBase;
use Ejercicios\Resultado\ResultadoHorario;
use Ejercicios\Resultado\ResultadoMultiple;

class Ejercicio4 extends EjercicioBase
{
   protected static function obtenerResultado(): ResultadoMultiple
    {
        $semestres = [
            '1º sementre',
            '2º sementre',
            '3º sementre',
            '4º sementre',
            '5º sementre',
            '6º sementre',
            '7º sementre',
            '8º sementre'
        ];

        // ===== PRIMER MÓDULO =====
        $modulo1 = new ResultadoHorario(
            'Primer Modulo',
            'Del 02 de Agosto al 17 de septiembre de 2021',
            'Ingenieria de sistemas plan de estudios nuevo (rediseño)',
            $semestres,
            [
                [
                    'hora' => '19:00 <br>20:30',
                    'materias' => [
                        ['nombre' => 'Informatica I', 'docente' => 'Ing. Ery Cruz Burgoa'],
                        ['nombre' => 'Algebra Lineal', 'docente' => 'Lic. W. Adiviri'],
                        ['nombre' => 'Contabilidad Basica', 'docente' => 'Lic. A. Durán'],
                        ['nombre' => 'Lenguajes de Programación', 'docente' => 'Ing. M. Zabala U'],
                        ['nombre' => 'Optativa I', 'docente' => 'Ing. Y. Quintanilla'],
                        ['nombre' => 'Investigacion Operativa II', 'docente' => 'Ing. L. Flores'],
                        ['nombre' => 'Tecnologias Emergentes', 'docente' => 'Ing. M. Olmos'],
                        ['nombre' => 'Auditoria de Sistemas', 'docente' => 'Ing. G. Balderrama']
                    ]
                ],
                [
                    'hora' => '20:30 <br>22:00',
                    'materias' => [
                        ['nombre' => 'Administracion I', 'docente' => 'Lic. C. Calizaya'],
                        ['nombre' => 'Informatica II', 'docente' => 'Ing. R. Rojas'],
                        ['nombre' => 'Estadistica I', 'docente' => 'ing. L. Flores'],
                        ['nombre' => 'Base de Datos I', 'docente' => 'Ing. M. Olmos'],
                        ['nombre' => 'Diseño de paginas web I', 'docente' => 'Ing. G. Balderrama'],
                        ['nombre' => 'Diseño de Paginas Web II', 'docente' => 'Ing. L. Santos'],
                        ['nombre' => 'Simulacion', 'docente' => 'Ing. A. Lara'],
                        ['nombre' => 'Administracion de Sis. De Inf', 'docente' => 'Ing. E. Flores']
                    ]
                ]
            ]
        );

        // ===== SEGUNDO MÓDULO =====
        $modulo2 = new ResultadoHorario(
            'Segundo Modulo',
            'Del 20 de septiembre al 05 de noviembre de 2021',
            'Ingenieria de sistemas plan de estudios nuevo (rediseño)',
            $semestres,
            [
                [
                    'hora' => '19:00 <br>20:30',
                    'materias' => [
                        ['nombre' => 'Algebra y Lógica formal', 'docente' => 'Ing. F. Muñoz'],
                        ['nombre' => 'Ingles II', 'docente' => 'Dr. G. Iñiguez'],
                        ['nombre' => 'Estructura de Datos', 'docente' => 'Ing. Ery Cruz Burgoa'],
                        ['nombre' => 'Circuitos Electronicos', 'docente' => 'Ing. M. Zabala U'],
                        ['nombre' => 'Diseño Grafico de Interfaz', 'docente' => 'Ing. Y. Limachi'],
                        ['nombre' => 'Preparacion y Evaluacion de Proyectos', 'docente' => 'Ing. I. Rojas'],
                        ['nombre' => 'Redes de computadoras I', 'docente' => 'Ing. L. Santos'],
                        ['nombre' => 'Optativa III', 'docente' => 'Lic. W. Lopéz']
                    ]
                ],
                [
                    'hora' => '20:30 <br>22:00',
                    'materias' => [
                        ['nombre' => 'Ingles I', 'docente' => 'Dra. G. iñiguez'],
                        ['nombre' => 'Cálculo II', 'docente' => 'Ing. L. Lucas'],
                        ['nombre' => '', 'docente' => ''], // Celda vacía
                        ['nombre' => 'Ingenieria de Sistemas I', 'docente' => 'Ing. M. Chungara'],
                        ['nombre' => 'Investigacion Operativa I', 'docente' => 'Ing. L Flores'],
                        ['nombre' => 'Sistemas Operativos', 'docente' => 'Ing. R. Arias'],
                        ['nombre' => 'Legislacion Informatica', 'docente' => 'Dr. R. Alarcon'],
                        ['nombre' => 'Redes de Computadoras II', 'docente' => 'Ing. L. Santos']
                    ]
                ]
            ]
        );

        // ===== TERCER MÓDULO =====
        $modulo3 = new ResultadoHorario(
            'Tercer Módulo',
            'Del 08 de Noviembre al 23 de Diciembre de 2021',
            'Ingenieria de sistemas plan de estudios nuevo (rediseño)',
            $semestres,
            [
                [
                    'hora' => '19:00 <br>20:30',
                    'materias' => [
                        ['nombre' => 'Calculo I', 'docente' => 'Ing. I. Lucas'],
                        ['nombre' => 'Arquitectura computacional', 'docente' => 'Dr. Y. Limachi'],
                        ['nombre' => 'Electricidad y Magnetismo', 'docente' => 'Ing. A. Iñiguez'],
                        ['nombre' => 'Estadistica II', 'docente' => 'Ing. E. Cadima'],
                        ['nombre' => 'Ingenieria de Sistemas II', 'docente' => 'Ing. M. Zabala U'],
                        ['nombre' => 'Ingenieria de Sistemas III', 'docente' => 'Ing. M. Chungara'],
                        ['nombre' => 'Ingeniera de Software', 'docente' => 'Ing. F. Muñoz'],
                        ['nombre' => 'Inteligencia Artificial', 'docente' => 'Ing. G. Balderrama']
                    ]
                ],
                [
                    'hora' => '20:30 <br>22:00',
                    'materias' => [
                        ['nombre' => 'Ing. De Sis. En las organizaciones', 'docente' => 'Ing. A. Lara'],
                        ['nombre' => 'Mecanica Clasica', 'docente' => 'Ing. F. Muñoz'],
                        ['nombre' => 'Ecuaciones Diferenciales', 'docente' => 'Ing. E. Cadima'],
                        ['nombre' => 'Sis. Informaticos Contables', 'docente' => 'Lic. O. Aramayo'],
                        ['nombre' => 'Base de Datos II', 'docente' => 'Ing. M. Chungara'],
                        ['nombre' => 'Base de Datos III', 'docente' => 'Ing. R. Arias'],
                        ['nombre' => 'Optativa II', 'docente' => 'Ing. I. Sossa'],
                        ['nombre' => 'Metodologia de la investigacion', 'docente' => 'Lic. R. Sempertegui']
                    ]
                ]
            ]
        );

        // Retornar las 3 tablas envueltas en ResultadoMultiple
        return new ResultadoMultiple($modulo1, $modulo2, $modulo3);
    }

    public static function enunciado(): string
    {
        return 'Escribe un programa que muestre tu horario de clase mediante una tabla. Aunque se puede hacer íntegramente en HTML (igual que los ejercicios anteriores), ve intercalando código HTML y PHP para familiarizarte con éste último.';
    }
}
