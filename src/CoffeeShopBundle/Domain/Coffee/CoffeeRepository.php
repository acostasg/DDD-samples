<?php


namespace CoffeeShopBundle\Domain\Coffee;

interface CoffeeRepository
{
    /**
     * @return Coffee[]
     */
    public function getAvailableCoffee();
}
