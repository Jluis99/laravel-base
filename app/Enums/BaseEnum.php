<?php

namespace App\Enums;

use Illuminate\Support\Str;

/**
 *
 * @tutorial Working Class
 * @author Jose Nova
 * @since 21/06/2021
 */
abstract class BaseEnum
{

    /**
     *
     * @var integer
     */
    protected $id = NULL;

    /**
     *
     * @var string
     */
    protected $descripcion = NULL;

    /**
     *
     * @var string
     */
    protected $asistente = NULL;

    /**
     *
     * @var string
     */
    protected $auxiliar = NULL;

    /**
     *
     * @tutorial Method Description: constructor class
     * @author Jose Nova
     * @since 21/06/2021
     * @param integer $id
     * @param string $descripcion
     * @param string $asistente
     * @param string $auxiliar
     */
    public function __construct($id, $descripcion, $auxiliar = NULL, $asistente = NULL)
    {
        $this->descripcion = $descripcion;
        $this->asistente = $asistente;
        $this->auxiliar = $auxiliar;
        $this->id = $id;
    }

    /**
     *
     * @author Jose Nova
     * @since 21/06/2021
     * @return number
     */
    public function getAbreviatura()
    {
        return substr(Str::upper($this->descripcion), 0, 3);
    }

    /**
     *
     * @author Jose Nova
     * @since 21/06/2021
     * @return number
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     *
     * @author Jose Nova
     * @since 21/06/2021
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     *
     * @author Jose Nova
     * @since 21/06/2021
     * @return string
     */
    public function getAsistente()
    {
        return $this->asistente;
    }

    /**
     *
     * @author Jose Nova
     * @since 21/06/2021
     * @return string
     */
    public function getAuxiliar()
    {
        return $this->auxiliar;
    }

    /**
     *
     * @author Jose Nova
     * @since 21/06/2021
     * @param number $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     *
     * @author Jose Nova
     * @since 21/06/2021
     * @param string $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     *
     * @author Jose Nova
     * @since 21/06/2021
     * @param string $asistente
     */
    public function setAsistente($asistente)
    {
        $this->asistente = $asistente;
    }

    /**
     *
     * @author Jose Nova
     * @since 21/06/2021
     * @param string $auxiliar
     */
    public function setAuxiliar($auxiliar)
    {
        $this->auxiliar = $auxiliar;
    }
}
