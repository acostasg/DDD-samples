<?php

namespace CoffeeShopBundle\Domain\Coffee;

class CoffeeDecorator implements Coffee
{
    /** @var Coffee */
    protected $coffee;

    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    /**
     * @return float
     */
    public function getCost()
    {
        return $this->coffee->getCost();
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->coffee->getCurrency();
    }
}
