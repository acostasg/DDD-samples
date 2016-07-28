<?php
/**
 * Created by PhpStorm.
 * User: albert.costas
 * Date: 28/7/16
 * Time: 21:14
 */

namespace CoffeeShopBundle\Entity;

use CoffeeShopBundle\Domain\Coffee\CoffeeDecorator;

class GroundCinnamonTopping extends CoffeeDecorator
{
    public function getCost()
    {
        return parent::getCost() + 0.75;
    }
}
