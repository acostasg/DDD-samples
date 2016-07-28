<?php

namespace CoffeShopBundle\Entity;

use CoffeeShopBundle\Domain\Coffee\Currency;
use CoffeeShopBundle\Entity\LatteCoffee;

class LatteCoffeeTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function checkLatteCoffeeCost()
    {
        $coffeeTest = new LatteCoffee();
        $this->assertEquals(1.5, $coffeeTest->getCost());
    }

    /**
     * @test
     */
    public function checkLatteCoffeeCurrencyEUR()
    {
        $coffeeTest = new LatteCoffee();
        $this->assertEquals(Currency::EURO, $coffeeTest->getCurrency());
    }

    /**
     * @test
     */
    public function checkLatteCoffeeCurrencyDOLLAR()
    {
        $coffeeTest = new LatteCoffee(Currency::DOLLAR);
        $this->assertEquals(Currency::DOLLAR, $coffeeTest->getCurrency());
    }
}
