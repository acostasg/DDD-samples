<?php

namespace CoffeeShopBundle\Entity;

class EspressoCoffee extends Coffee
{
    public function __construct()
    {
        $this->originalCost = 1.0;
    }
}