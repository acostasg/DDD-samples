<?php

namespace CoffeShopBundle\Domain\Coffee;

use CoffeeShopBundle\Domain\Coffee\Currency;

class CurrencyTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function checkCurrencyEUR()
    {
        $currency = new Currency(Currency::EURO);
        $this->assertEquals(Currency::EURO, $currency->getCurrencyCode());
        $this->assertEquals(978, $currency->getNumericCode());
        $this->assertEquals('Euro', $currency->getDisplayName());
    }

    /**
     * @test
     */
    public function checkCurrencyDOLLAR()
    {
        $currency = new Currency(Currency::DOLLAR);
        $this->assertEquals(Currency::DOLLAR, $currency->getCurrencyCode());
        $this->assertEquals(840, $currency->getNumericCode());
        $this->assertEquals('US Dollar', $currency->getDisplayName());
    }
}
