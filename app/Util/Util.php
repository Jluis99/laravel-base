<?php

namespace App\Util;

class Util
{
    /**
     *
     * @tutorial Method Description: Formatea un numero
     * @author Jose Nova
     * @since 21/06/2021
     * @param integer $number
     * @param string $decimals
     * @param string $search
     * @param string $replace
     * @return string
     */
    public static function formatNumber($number, $decimals = null, $search = ',', $replace = '.')
    {
        $number = ((int) $number <= 0) ? 0 : $number;
        return number_format($number, $decimals, $search, $replace);
    }

    /**
     *
     * @tutorial Method Description: Comprueba si el objeto o la clase tienen una propiedad.
     * @author Jose Nova
     * @since 21/06/2021
     * @param object|string $class
     * @param string $property
     * @return boolean
     */
    public static function propertyExists($class, $property)
    {
        return property_exists($class, $property);
    }

    /**
     *
     * @tutorial Method Description: Formatea un numero redondeando hacia arriba.
     * @author Jose Nova
     * @since 21/06/2021
     * @param double $numero
     * @param integer $decimales
     * @return number
     */
    public static function redondear($numero, $decimales = 1)
    {
        $factor = pow(10, $decimales);
        $numero = round($numero * $factor) / $factor;
        return $numero;
    }

    /**
     *
     * @tutorial Method Description: Formatea un numero sin redondear.
     * @author Jose Nova
     * @since 21/06/2021
     * @param double $numero
     * @param integer $decimales
     * @return number
     */
    public static function sinRedondear($numero, $decimales = 1)
    {
        $numero2 = $numero + 0.001;
        $tmp = $numero2 * (pow(10, $decimales));
        $parte_entera = intval($tmp);
        $numero_final = $parte_entera / (pow(10, $decimales));
        return $numero_final;
    }
}
