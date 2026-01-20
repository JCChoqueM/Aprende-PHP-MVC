<?php

namespace Ejercicios\Tema1;

class Ejercicio4
{
    public static function resolver(): array
    {
        $resultado = '
        <table border="5">
            <caption>
                Primer Módulo<br>
                Del 02 de Agosto al 17 de Septiembre de 2021<br>
                Ingeniería de Sistemas - Plan de Estudios Nuevo (Rediseño)
            </caption>
            <tr>
                <th>Hora</th>
                <th>1º semestre</th>
                <th>2º semestre</th>
                <th>3º semestre</th>
                <th>4º semestre</th>
                <th>5º semestre</th>
                <th>6º semestre</th>
                <th>7º semestre</th>
                <th>8º semestre</th>
            </tr>
            <tr>
                <td>19:00 <br>20:30</td>
                <td>Informatica I <br>Ing. Ery Cruz Burgoa</td>
                <td>Algebra Lineal <br>Lic. W. Adiviri</td>
                <td>Contabilidad Basica <br>Lic. A. Durán</td>
                <td>Lenguajes de Programación <br>Ing. M. Zabala U</td>
                <td>Optativa I <br>Ing. Y. Quintanilla</td>
                <td>Investigacion Operativa II <br>Ing. L. Flores</td>
                <td>Tecnologias Emergentes <br>Ing. M. Olmos</td>
                <td>Auditoria de Sistemas <br>Ing. G. Balderrama</td>
            </tr>
            <tr>
                <td>20:30 <br>22:00</td>
                <td>Administracion I <br>Lic. C. Calizaya</td>
                <td>Informatica II <br>Ing. R. Rojas</td>
                <td>Estadistica I <br>Ing. L. Flores</td>
                <td>Base de Datos I <br>Ing. M. Olmos</td>
                <td>Diseño de paginas web I <br>Ing. G. Balderrama</td>
                <td>Diseño de Paginas Web II <br>Ing. L. Santos</td>
                <td>Simulacion <br>Ing. A. Lara</td>
                <td>Administracion de Sis. De Inf <br>Ing. E. Flores</td>
            </tr>
        </table>
        ';
        return [
            'resultado' => $resultado
        ];
    }
    public static function metadata(): array
    {
        return [
            'tema' => 'Tema 4',
            'ejercicio' => 'Ejercicio 4',
            'descripcion' =>
            'Escribe un programa que muestre tu horario de clase mediante una tabla. Aunque se puede hacer íntegramente en HTML (igual que los ejercicios anteriores), ve intercalando código HTML y PHP para familiarizarte con éste último.'
        ];
    }
}
