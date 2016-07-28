<?php

namespace CoffeeShopBundle\Entity;

use CoffeeShopBundle\Domain\Coffee\Currency;

class GroundCinnamonToppingTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function checkCreamToppingCost()
    {
        $coffeeTest = new GroundCinnamonTopping(new Coffee());
        $this->assertEquals(0.75, $coffeeTest->getCost());
    }

    /**
     * @test
     */
    public function checkCreamToppingCurrencyEUR()
    {
        $coffeeTest = new GroundCinnamonTopping(new Coffee());
        $this->assertEquals(Currency::EURO, $coffeeTest->getCurrency());
    }

    /**
     * @test
     */
    public function checkCreamToppingCurrencyDOLLAR()
    {
        $coffeeTest = new GroundCinnamonTopping(new Coffee(Currency::DOLLAR));
        $this->assertEquals(Currency::DOLLAR, $coffeeTest->getCurrency());
    }
}
