<?php

declare(strict_types=1);

namespace App\Decorator\Condiments;

use App\Decorator\Beverage;

class Milk extends CondimentDecorator
{
    private Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', Milk';
    }

    public function cost(): float
    {
        return .20 + $this->beverage->cost();
    }
}
