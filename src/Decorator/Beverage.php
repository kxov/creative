<?php

declare(strict_types=1);

namespace App\Decorator;

abstract class Beverage
{
    protected string $description = 'beverage';

    public function getDescription(): string
    {
        return $this->description;
    }

    public abstract function cost(): float;
}