<?php

namespace CoffeeShopBundle\Entity;

use CoffeeShopBundle\Domain\Coffee\Currency;

class Coffee implements \CoffeeShopBundle\Domain\Coffee\Coffee
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
}
