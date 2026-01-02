/*
 * DATOS CENTRALIZADOS (data.js)
 * ======================================== 
 * Este archivo contiene el array de capítulos y ejercicios.
 * 
 * Estructura:
 * - chapters: Array principal con 10 capítulos
 * - Cada capítulo tiene: id, name, exercises[]
 * - Cada ejercicio es un string simple
 * 
 * Ventajas:
 * - Todos los datos en un solo lugar
 * - Fácil de modificar, agregar, o eliminar capítulos
 * - Separado de la lógica y la presentación
 * 
 * Se importa en: exercises.js (para generar la estructura)
 * ========================================
 */

// Array centralizado con todos los capítulos y sus ejercicios
export const chapters = [
    {
        id: 1,
        name: "Salida por pantalla",
        exercises: ["Ejercicio 1", "Ejercicio 2", "Ejercicio 3", "Ejercicio 4", "Ejercicio 5"]
    },
    {
        id: 2,
        name: "Variables",
        exercises: ["Ejercicio 1", "Ejercicio 2", "Ejercicio 3", "Ejercicio 4"]
    },
    {
        id: 3,
        name: "Lectura de datos",
        exercises: ["Ejercicio 1", "Ejercicio 2", "Ejercicio 3"]
    },
    {
        id: 4,
        name: "Condicionales",
        exercises: ["Ejercicio 1", "Ejercicio 2", "Ejercicio 3", "Ejercicio 4", "Ejercicio 5", "Ejercicio 6"]
    },
    {
        id: 5,
        name: "Bucles",
        exercises: ["Ejercicio 1", "Ejercicio 2", "Ejercicio 3", "Ejercicio 4", "Ejercicio 5"]
    },
    {
        id: 6,
        name: "Números aleatorios",
        exercises: ["Ejercicio 1", "Ejercicio 2", "Ejercicio 3"]
    },
    {
        id: 7,
        name: "Arrays",
        exercises: ["Ejercicio 1", "Ejercicio 2", "Ejercicio 3", "Ejercicio 4"]
    },
    {
        id: 8,
        name: "Funciones",
        exercises: ["Ejercicio 1", "Ejercicio 2", "Ejercicio 3"]
    },
    {
        id: 9,
        name: "Formularios",
        exercises: ["Ejercicio 1", "Ejercicio 2", "Ejercicio 3", "Ejercicio 4"]
    },
    {
        id: 10,
        name: "POO",
        exercises: ["Ejercicio 1", "Ejercicio 2", "Ejercicio 3"]
    }
];
