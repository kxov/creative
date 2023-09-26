<?php declare(strict_types=1);

namespace App\Tests\Decorator;

use App\Decorator\Condiments\Milk;
use PHPUnit\Framework\TestCase;
use App\Decorator\Espresso;

class DecoratorTest extends TestCase
{
    /**
     * @covers App\Decorator\Espresso;
     */
    public function testDescription()
    {
        $coffee = new Espresso();

        self::assertEquals('Espresso', $coffee->getDescription());
        self::assertEquals(1.99, $coffee->cost());

        $beverage = new Milk($coffee);
        self::assertEquals('Espresso, Milk', $beverage->getDescription());
        self::assertEquals(2.19, $beverage->cost());
    }
}