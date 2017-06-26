<?php

namespace FakerProviderAnimals\Test\Provider\en_GB;

use Faker\Generator;
use FakerProviderAnimals\Animals;

/**
 * Class AnimalsTest
 *
 * @package FakerProviderAnimals\Test\Provider\en_GB
 */
class AnimalsTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Generator
     */
    private $faker;

    /**
     * Set up test environment
     */
    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Animals($faker));
        $this->faker = $faker;
    }

    /**
     * Test if animal name is a string
     */
    public function testIsString()
    {
        $animalName = $this->faker->animal();

        $this->assertRegExp('/^[\w-]+$/', $animalName);
    }
}
