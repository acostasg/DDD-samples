<?php

namespace CoffeeShopBundle\Entity;

class LatteCoffee extends Coffee
{
    public function __construct()
    {
        parent::__construct();
        $this->originalCost = 1.5;
    }
}
