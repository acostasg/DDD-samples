<?php

namespace CoffeeShopBundle\Entity;

use CoffeeShopBundle\Domain\Coffee\Currency;
use CoffeeShopBundle\Domain\Coffee\Coffee as iCoffee;

class Coffee implements iCoffee
{
    /**
     * @var float
     */
    protected $originalCost = 0.0;

    /**
     * @var Currency
     */
    protected $currency;

    public function __construct($currency = Currency::EURO)
    {
        $this->currency = new Currency($currency);
    }

    /**
     * @return float
     */
    public function getCost()
    {
        return $this->originalCost;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return (string) $this->currency;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return substr(strrchr(get_class($this), "\\"), 1);
    }
}
