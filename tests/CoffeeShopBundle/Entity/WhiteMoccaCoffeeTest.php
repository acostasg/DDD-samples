<?php

namespace CoffeeShopBundle\Entity;

use CoffeeShopBundle\Domain\Coffee\Currency;

class WhiteMoccaCoffeeTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function checkWhiteMoccaCoffeeCost()
    {
        $coffeeTest = new WhiteMoccaCoffee();
        $this->assertEquals(2, $coffeeTest->getCost());
    }

    /**
     * @test
     */
    public function checkWhiteMoccaCoffeeCurrencyEUR()
    {
        $coffeeTest = new WhiteMoccaCoffee();
        $this->assertEquals(Currency::EURO, $coffeeTest->getCurrency());
    }

    /**
     * @test
     */
    public function checkWhiteMoccaCoffeeCurrencyDOLLAR()
    {
        $coffeeTest = new WhiteMoccaCoffee(Currency::DOLLAR);
        $this->assertEquals(Currency::DOLLAR, $coffeeTest->getCurrency());
    }
}
