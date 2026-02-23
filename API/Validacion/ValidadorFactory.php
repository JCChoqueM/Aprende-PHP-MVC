<?php
// 11_ValidadorFactory.php
// Validacion/ValidadorFactory.php
namespace API\Validacion;

use API\Validacion\Reglas\{
    CampoRequerido,
    CampoNoVacio,
    CampoNumerico,
    ValorPositivo,
    RangoValor
};

class ValidadorFactory
{
    /**
     * Crea un validador para campos numéricos positivos
     */
    public static function numericoPositivo(array $campos): Validador
    {
        $validador = new Validador();
        $validador->setEtiquetas($campos);

        foreach (array_keys($campos) as $campo) {
            $validador
                ->agregarRegla($campo, new CampoRequerido())
                ->agregarRegla($campo, new CampoNoVacio())
                ->agregarRegla($campo, new CampoNumerico())
                ->agregarRegla($campo, new ValorPositivo());
        }

        return $validador;
    }

    /**
     * Crea un validador para campos numéricos con rango
     */
    public static function numericoConRango(array $campos, ?float $min = null, ?float $max = null): Validador
    {
        $validador = self::numericoPositivo($campos);

        foreach (array_keys($campos) as $campo) {
            $validador->agregarRegla($campo, new RangoValor($min, $max));
        }

        return $validador;
    }

    /**
     * Crea un validador para campos numéricos que pueden ser cero o positivos
     */
    public static function numericoNoNegativo(array $campos): Validador
    {
        $validador = new Validador();
        $validador->setEtiquetas($campos);

        foreach (array_keys($campos) as $campo) {
            $validador
                ->agregarRegla($campo, new CampoRequerido())
                ->agregarRegla($campo, new CampoNoVacio())
                ->agregarRegla($campo, new CampoNumerico())
                ->agregarRegla($campo, new ValorPositivo(true)); // true = incluir cero
        }

        return $validador;
    }
}
?>