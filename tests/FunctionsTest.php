<?php declare(strict_types=1);

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use function App\Functions\mostFrequent;

/**
 * @covers App\Functions\mostFrequent;
 */
class FunctionsTest extends TestCase
{
    public static function dataSuccess(): array
    {
        return [
            [
                [34, 56, 56, 23, 23], [23 => 2, 34 => 1, 56 => 2]
            ]
        ];
    }

    /**
     * @dataProvider dataSuccess
     */
    public function testMostFrequentFunction($input, $expected)
    {
        self::assertEquals($expected, mostFrequent($input));
    }
}