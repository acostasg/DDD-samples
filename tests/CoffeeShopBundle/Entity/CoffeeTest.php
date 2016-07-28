<?php

namespace CoffeeShopBundle\Entity;

use CoffeeShopBundle\Domain\Coffee\Currency;

class CoffeeTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function checkCoffeeCost()
    {
        $coffeeTest = new Coffee();
        $this->assertEquals(0, $coffeeTest->getCost());
    }

    /**
     * @test
     */
    public function checkCoffeeCurrencyEUR()
    {
        $coffeeTest = new Coffee();
        $this->assertEquals(Currency::EURO, $coffeeTest->getCurrency());
    }

    /**
     * @test
     */
    public function checkCoffeeCurrencyDOLLAR()
    {
        $coffeeTest = new Coffee(Currency::DOLLAR);
        $this->assertEquals(Currency::DOLLAR, $coffeeTest->getCurrency());
    }
}
