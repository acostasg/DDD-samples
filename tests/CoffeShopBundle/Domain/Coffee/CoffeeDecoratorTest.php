<?php


namespace CoffeShopBundle\Domain\Coffee;

use CoffeeShopBundle\Domain\Coffee\CoffeeDecorator;
use CoffeeShopBundle\Domain\Coffee\Currency;
use CoffeeShopBundle\Entity\Coffee;

class CoffeeDecoratorTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function checkCoffeeCost()
    {
        $coffeeTest = new CoffeeDecorator(new Coffee());
        $this->assertEquals(0, $coffeeTest->getCost());
    }

    /**
     * @test
     */
    public function checkCoffeeCurrencyEUR()
    {
        $coffeeTest = new CoffeeDecorator(new Coffee());
        $this->assertEquals(Currency::EURO, $coffeeTest->getCurrency());
    }

    /**
     * @test
     */
    public function checkCoffeeCurrencyDOLLAR()
    {
        $coffeeTest = new CoffeeDecorator(new Coffee(Currency::DOLLAR));
        $this->assertEquals(Currency::DOLLAR, $coffeeTest->getCurrency());
    }
}
