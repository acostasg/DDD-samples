<?php
/**
 * Created by PhpStorm.
 * User: albert.costas
 * Date: 28/7/16
 * Time: 21:14
 */

namespace CoffeeShopBundle\Entity;

use CoffeeShopBundle\Domain\Coffee\CoffeeDecorator;

class CreamTopping extends CoffeeDecorator
{
    public function getCost()
    {
        return parent::getCost() + 0.65;
    }
}
