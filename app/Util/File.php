<?php

namespace App\Util;

class File
{

    /**
     *
     * @tutorial Method Description: Valida si el archivo existe
     * @author Jose Nova
     * @since 21/06/2021
     * @param string $filename
     * @return boolean
     */
    public static function fileExists($filename)
    {
        return file_exists(str_replace('\\', '/', $filename));
    }

    /**
     *
     * @tutorial Method Description: Formatea el tamaño de un archivo.
     * @author Jose Nova
     * @since 21/06/2021
     * @param double $bytes
     * @return string
     */
    public static function formatSize($bytes)
    {
        if ($bytes >= 1073741824) {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        } elseif ($bytes >= 1048576) {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        } elseif ($bytes >= 1024) {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        } elseif ($bytes > 1) {
            $bytes = $bytes . ' bytes';
        } elseif ($bytes == 1) {
            $bytes = $bytes . ' byte';
        } else {
            $bytes = '0 bytes';
        }

        return $bytes;
    }
}
