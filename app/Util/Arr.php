<?php

namespace App\Util;

use Illuminate\Support\Arr as SupportArr;

class Arr extends SupportArr {

    /**
     *
     * @tutorial Method Description: Valida si existe el valor en el array.
     * @author Jose Nova
     * @since 21/06/2021
     * @param mixed $needle
     * @param array $haystack
     * @return boolean
     */
    public static function inArray($needle, $haystack)
    {
        return in_array($needle, $haystack);
    }

    /**
     * @tutorial Method Description: Retorna la cantidad de elementos de un array.
     * @author Jose Nova
     * @since 21/06/2021
     * @param array $var
     * @return string
     */
    public static function count($array, $mode = COUNT_NORMAL)
    {
        $array = ($array instanceof \Illuminate\Support\Collection ? $array->toArray() : $array);
        return count($array, $mode);
    }

    /**
     * @tutorial Method Description: Retorna el merge de dos arrays.
     * @author Jose Nova
     * @since 21/06/2021
     * @param string $array1
     * @param string $array2
     * @return string
     */
    public static function merge($array1, $array2 = null): array
    {
        $array1 = ($array1 instanceof \Illuminate\Support\Collection ? $array1->toArray() : $array1);
        $array2 = ($array2 instanceof \Illuminate\Support\Collection ? $array2->toArray() : $array2);
        return array_merge($array1, $array2);
    }

    /**
     * @tutorial Method Description: Retorna las llaves de un array.
     * @author Jose Nova
     * @since 21/06/2021
     * @param string $array
     * @return string
     */
    public static function keys($array): array
    {
        $array = ($array instanceof \Illuminate\Support\Collection ? $array->toArray() : $array);
        return array_keys($array);
    }

    /**
     * @tutorial Verifica si la variable es un array.
     * @author Jose Nova
     * @since 21/06/2021
     */
    public static function isArray($var)
    {
        return is_array($var);
    }

    /**
     *
     * @tutorial Method Description: Divide un string en varios string.
     * @author Jose Nova
     * @since 21/06/2021
     * @param string $delimiter
     * @param string $string
     * @return mixed
     */
    public static function explode($delimiter, string $string)
    {
        return explode($delimiter, $string);
    }

    /**
     *
     * @tutorial Method Description: Une elementos de un array en un string.
     * @author Jose Nova
     * @since 21/06/2021
     * @return mixed
     */
    public static function implode(array $pieces, $glue = ", "): string
    {
        return implode($glue, $pieces);
    }
}
