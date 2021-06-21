<?php
namespace App\Enums;

/**
 *
 * @tutorial Working Class
 * @author Eminson Mendoza ~ emimaster16@gmail.com
 * @since 15/04/2018
 */
class ESiNo extends BaseEnum
{

    /**
     *
     * @var array
     */
    protected static $items = array();

    const SI = 'N_1';

    const NO = 'N_2';

    /**
     *
     * @tutorial initializes the values ​​listed
     * @author Eminson Mendoza ~ emimaster16@gmail.com
     * @since {20/09/2015}
     * @return void
     */
    protected static function values()
    {
        static::$items[static::SI] = new ESiNo(1, __('general.si'));
        static::$items[static::NO] = new ESiNo(2, 'No');
    }

    /**
     *
     * @tutorial Method Description: returns list of data for selects
     * @author Eminson Mendoza ~ emimaster16@gmail.com
     * @since {13/05/2018}
     * @return multitype:NULL
     */
    public static function items()
    {
        if (blank(static::$items)) {
            static::values();
        }
        $items = [];
        foreach (static::$items as $item) {
            $items[$item->getId()] = $item->getDescripcion();
        }
        return $items;
    }

    /**
     *
     * @tutorial Method Description: search for ESiNo index
     * @author Eminson Mendoza ~ emimaster16@gmail.com
     * @since {23/07/2017}
     * @param string $search
     * @return AEnum
     */
    public static function index($search)
    {
        if (blank(static::$items)) {
            static::values();
        }
        return static::$items[$search];
    }

    /**
     *
     * @tutorial get result of the ESiNo values
     * @author Eminson Mendoza ~ emimaster16@gmail.com
     * @since {20/09/2015}
     * @param string $search
     * @return Ambigous <\app\enums\ESiNo, ESiNo>
     */
    public static function result($search)
    {
        if (blank(static::$items)) {
            static::values();
        }
        $result = new ESiNo(null, null);
        foreach (static::$items as $item) {
            if ($item->getId() == $search) {
                $result = $item;
                break;
            }
        }
        return $result;
    }

    /**
     *
     * @tutorial get data values ESiNo listed
     * @author Eminson Mendoza ~ emimaster16@gmail.com
     * @since {20/09/2015}
     * @return array
     */
    public static function data()
    {
        if (blank(static::$items)) {
            static::values();
        }
        return static::$items;
    }
}
