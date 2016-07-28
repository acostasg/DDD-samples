<?php

namespace CoffeeShopBundle\Entity;

use CoffeeShopBundle\Domain\Coffee\CoffeeDecorator;

class CaramelTopping extends CoffeeDecorator
{
    public function getCost()
    {
        return parent::getCost() + 0.5;
    }
}
