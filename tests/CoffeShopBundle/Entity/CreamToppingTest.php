<?php

namespace CoffeShopBundle\Entity;

use CoffeeShopBundle\Domain\Coffee\Currency;
use CoffeeShopBundle\Entity\CaramelTopping;
use CoffeeShopBundle\Entity\Coffee;

class CreamToppingTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function checkCreamToppingCost()
    {
        $coffeeTest = new CaramelTopping(new Coffee());
        $this->assertEquals(0.5, $coffeeTest->getCost());
    }

    /**
     * @test
     */
    public function checkCreamToppingCurrencyEUR()
    {
        $coffeeTest = new CaramelTopping(new Coffee());
        $this->assertEquals(Currency::EURO, $coffeeTest->getCurrency());
    }

    /**
     * @test
     */
    public function checkCreamToppingCurrencyDOLLAR()
    {
        $coffeeTest = new CaramelTopping(new Coffee(Currency::DOLLAR));
        $this->assertEquals(Currency::DOLLAR, $coffeeTest->getCurrency());
    }
}
