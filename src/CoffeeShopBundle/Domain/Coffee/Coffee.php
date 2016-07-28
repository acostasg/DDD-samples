<?php

namespace CoffeeShopBundle\Domain\Coffee;

interface Coffee
{
    /**
     * @return float
     */
    public function getCost();

    /**
     * @return sting
     */
    public function getCurrency();

    /**
     * @return string
     */
    public function getName();
}
