<?php

namespace App\Util;

use Carbon\Carbon;

class Util
{
    /**
     * @tutorial Method Description: Formatea la fecha según el formado dado.
     * @author Jose Nova
     * @since 21/06/2021
     * @return string
     */
    public static function formatDate($date, $format = 'd M. Y', $br = '<br>')
    {
        if (blank($date)) {
            return null;
        }
        $mesesArray = ['01' => "Enero", '02' => "Febrero", '03' => "Marzo", '04' => "Abril", '05' => "Mayo", '06' => "Junio", '07' => "Julio", '08' => "Agosto", '09' => "Septiembre", '10' => "Octubre", '11' => "Noviembre", '12' => "Diciembre"];
        switch ($format) {
            case 'M d':
                if (strlen($date) > 10) {
                    $datePartialsTemp = explode(' ', $date);
                    $datePartials = explode('-', $datePartialsTemp[0]);
                    $date = substr($mesesArray[$datePartials[1]], 0, 3) . ' ' . $datePartials[2];
                } else {
                    $datePartials = explode('-', $date);
                    $date = substr($mesesArray[$datePartials[1]], 0, 3) . ' ' . $datePartials[2];
                }
                break;
            case 'd M. y':
                if (strlen($date) > 10) {
                    $datePartialsTemp = explode(' ', $date);
                    $datePartials = explode('-', $datePartialsTemp[0]);
                    $date = $datePartials[2] . ' ' . substr($mesesArray[$datePartials[1]], 0, 3) . '. ' . substr($datePartials[0], 2, 2);
                } else {
                    $datePartials = explode('-', $date);
                    $date = $datePartials[2] . ' ' . substr($mesesArray[$datePartials[1]], 0, 3) . ' ' . substr($datePartials[0], 2, 2);
                }
                break;
            case 'd M. Y':
                $date = Carbon::parse($date)->format('d-m-Y');
                if (strlen($date) > 10) {
                    $datePartialsTemp = explode(' ', $date);
                    $datePartials = explode('-', $datePartialsTemp[0]);
                    $date = $datePartials[2] . ' ' . substr($mesesArray[$datePartials[1]], 0, 3) . '. ' . $datePartials[0];
                } else {
                    $datePartials = explode('-', $date);
                    $date = $datePartials[0] . ' ' . substr($mesesArray[$datePartials[1]], 0, 3) . '. ' . $datePartials[2];
                }
                break;
            case 'd M. y, h:i a':{
                    if (strlen($date) > 10) {
                        //$date = date('Y-m-d h:i a', strtotime($date));
                        $datePartialsTemp = explode(' ', $date);
                        $datePartials = explode('-', $datePartialsTemp[0]);
                        $dateTemporal = $datePartials[2] . ' ' . substr($mesesArray[$datePartials[1]], 0, 3) . '. ' . substr($datePartials[0], 2, 2);
                        $date = $dateTemporal . ', ' . date('h:i a', strtotime($date));
                    } else {
                        $date = "Error con la fecha dada";
                    }
                }break;
            case 'd M. Y/h:i a':
                {
                    if (strlen($date) > 10) {
                        //$date = date('Y-m-d h:i a', strtotime($date));
                        $datePartialsTemp = explode(' ', $date);
                        $datePartials = explode('-', $datePartialsTemp[0]);
                        $dateTemporal = $datePartials[2] . ' ' . substr($mesesArray[$datePartials[1]], 0, 3) . '. ' . substr($datePartials[0], 2, 2);
                        $date = $dateTemporal . $br . ' ' . date('h:i a', strtotime($date));
                    } else {
                        $date = "Error con la fecha dada";
                    }
                }break;
            case 'd-m-y-l':{
                    if (strlen($date) > 10) {
                        $datePartialsTemp = explode(' ', $date);
                        $datePartials = explode('-', $datePartialsTemp[0]);
                        return $datePartials[2] . ' días del mes de ' . $mesesArray[$datePartials[1]] . ' de ' . $datePartials[0];
                    }
                }break;
            case 'h:i a':
                {
                    $date = date('h:i a', strtotime($date));
                }break;
        }
        return $date;
    }

    /**
     * @tutorial Method Description: Formeta la hora.
     * @author Jose Nova
     * @since 21/06/2021
     * @return string
     */
    public static function formatHour($date, $format = 'd M. y, h:i a')
    {
        return static::formatDate($date, $format);
    }

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
     * @tutorial Method Description: Retorna los meses del año
     * @author Jose Nova
     * @since 21/06/2021
     * @return array
     */
    public static function meses()
    {
        return [
            '01' => 'Enero',
            '02' => 'Febrero',
            '03' => 'Marzo',
            '04' => 'Abril',
            '05' => 'Mayo',
            '06' => 'Junio',
            '07' => 'Julio',
            '08' => 'Agosto',
            '09' => 'Septiembre',
            '10' => 'Octubre',
            '11' => 'Noviembre',
            '12' => 'Diciembre',
        ];
    }

    /**
     *
     * @tutorial Method Description: Añade días a la fecha actual o la dada.
     * @author Jose Nova
     * @since 21/06/2021
     * @param number $days
     * @param Date $date
     * @return array
     */
    public static function addDays($days = 1, $date = null)
    {
        $date = blank($date) ? Carbon::now() : $date;
        return Carbon::parse($date)->add($days, 'day')->format('d-m-Y');
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

    /**
     *
     * @tutorial Method Description: calcula la edad
     * @author Jose Nova
     * @since 21/06/2021
     * @param string $fechaNacimiento
     * @return void|number
     */
    public static function calculaEdad($fechaNacimiento)
    {
        if (blank($fechaNacimiento) || ($fechaNacimiento === '0000-00-00' || $fechaNacimiento == '00-00-0000')) {
            return;
        }
        $fechaNacimiento = Carbon::parse($fechaNacimiento)->format('Y-m-d');
        $fechaActual = Carbon::now()->format('Y-m-d');

        list($anoNacimiento, $mesNacimiento, $diaNacimiento) = Arr::explode('-', $fechaNacimiento);
        list($anoActual, $mesActual, $diaActual) = Arr::explode('-', $fechaActual);

        if (($diaNacimiento != "00") and ($mesNacimiento != "00") and ($anoNacimiento != "0000") and ($diaNacimiento != "") and ($mesNacimiento != "") and ($anoNacimiento != "")) {
            $edad = $anoActual - $anoNacimiento;
            if ($mesActual < $mesNacimiento) {
                $edad--;
            } elseif ($mesActual == $mesNacimiento) {
                if ($diaActual < $diaNacimiento) {
                    $edad--;
                }
            }
            return $edad;
        }
    }
}
