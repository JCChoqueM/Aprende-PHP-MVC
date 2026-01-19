<?php

if (!function_exists('kdd')) {
    function kdd(...$args) {
        d(...$args);  // Usa la función d() de Kint
        die(1);
    }
}