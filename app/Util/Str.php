<?php

namespace App\Util;

use Illuminate\Support\Str as SupportStr;

class Str extends SupportStr
{

    /**
     *
     * @tutorial Method Description: Cuenta las palabras de un string.
     * @author Jose Nova
     * @since 21/06/2021
     * @param string $string
     * @return number
     */
    public static function wordCount($string)
    {
        return str_word_count($string);
    }

    /**
     *
     * @tutorial Method Description: Codifica en base 64
     * @author Jose Nova
     * @since 21/06/2021
     * @return string
     */
    public function baseEncode(string $data = '')
    {
        return base64_encode($data);
    }
    /**
     *
     * @tutorial Method Description: Decodifica base 64
     * @author Jose Nova
     * @since 21/06/2021
     * @return string
     */
    public function baseDecode(string $data = '')
    {
        return base64_decode($data);
    }

    /**
     *
     * @tutorial Method Description: Elimina espacio en blanco (u otro tipo de caracteres) del inicio y el final de la cadena.
     * @author Jose Nova
     * @since 21/06/2021
     * @param string $text
     * @param string $charlist
     * @return string
     */
    public static function trim($text, $charlist = null)
    {
        return trim($text, $charlist);
    }

    /**
     *
     * @tutorial Method Description: Retira espacios en blanco (u otros caracteres) del inicio de un string.
     * @author Jose Nova
     * @since 21/06/2021
     * @param string $str
     * @param string $charlist
     * @return string
     */
    public static function lTrim($str, $charlist = null)
    {
        return ltrim($str, $charlist);
    }

    /**
     *
     * @tutorial Method Description: Reemplaza todas las apariciones del string buscado con el string de reemplazo.
     * @author Jose Nova
     * @since 21/06/2021
     * @param string $subject
     * @param string $search
     * @param string $replace
     * @return string
     */
    public static function replace($subject, $search, $replace)
    {
        return str_replace($search, $replace, $subject);
    }
}
