<?php

namespace CoffeShopBundle\Entity;

use CoffeeShopBundle\Domain\Coffee\Currency;
use CoffeeShopBundle\Entity\CaramelTopping;
use CoffeeShopBundle\Entity\Coffee;

class CaramelToppingTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function checkCaramelToppingCost()
    {
        $coffeeTest = new CaramelTopping(new Coffee());
        $this->assertEquals(0.5, $coffeeTest->getCost());
    }

    /**
     * @test
     */
    public function checkCaramelToppingCurrencyEUR()
    {
        $coffeeTest = new CaramelTopping(new Coffee());
        $this->assertEquals(Currency::EURO, $coffeeTest->getCurrency());
    }

    /**
     * @test
     */
    public function checkCaramelToppingCurrencyDOLLAR()
    {
        $coffeeTest = new CaramelTopping(new Coffee(Currency::DOLLAR));
        $this->assertEquals(Currency::DOLLAR, $coffeeTest->getCurrency());
    }
}
