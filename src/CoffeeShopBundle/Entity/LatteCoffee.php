<?php

namespace CoffeeShopBundle\Entity;

use CoffeeShopBundle\Domain\Coffee\Currency;

class LatteCoffee extends Coffee
{
    public function __construct($currency = Currency::EURO)
    {
        parent::__construct($currency);
        $this->originalCost = 1.5;
    }
}
