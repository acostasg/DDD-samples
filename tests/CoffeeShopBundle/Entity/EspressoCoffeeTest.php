<?php

namespace CoffeeShopBundle\Entity;

use CoffeeShopBundle\Domain\Coffee\Currency;

class EspressoCoffeeTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function checkEspressoCoffeeCost()
    {
        $coffeeTest = new EspressoCoffee();
        $this->assertEquals(1, $coffeeTest->getCost());
    }

    /**
     * @test
     */
    public function checkEspressoCoffeeCurrencyEUR()
    {
        $coffeeTest = new EspressoCoffee();
        $this->assertEquals(Currency::EURO, $coffeeTest->getCurrency());
    }

    /**
     * @test
     */
    public function checkEspressoCoffeeCurrencyDOLLAR()
    {
        $coffeeTest = new EspressoCoffee(Currency::DOLLAR);
        $this->assertEquals(Currency::DOLLAR, $coffeeTest->getCurrency());
    }
}
