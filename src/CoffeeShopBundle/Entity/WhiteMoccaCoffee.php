<?php

namespace CoffeeShopBundle\Entity;


class WhiteMoccaCoffee extends Coffee
{
    public function __construct()
    {
        $this->originalCost = 2.0;
    }
}