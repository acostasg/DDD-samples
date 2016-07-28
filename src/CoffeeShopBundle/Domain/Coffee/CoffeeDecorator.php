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

    /**
     * @return string
     */
    public function getName()
    {
        return $this->coffee->getName().' with '.substr(strrchr(get_class($this), "\\"), 1);
    }
}
