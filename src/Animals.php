<?php

namespace FakerProviderAnimals;

use Faker\Provider\Base;

/**
 * Class Animals
 *
 * @package FakerProviderAnimals
 */
class Animals extends Base
{

    /**
     * Animals names
     *
     * @var array
     */
    protected static $animals = array();

    /**
     * Animal
     *
     * @example 'elephant'
     *
     * @return string
     */
    public static function animal()
    {
        return static::randomElement(static::$animals);
    }
}