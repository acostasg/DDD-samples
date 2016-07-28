<?php

namespace CoffeeShopBundle\Application;


use CoffeeShopBundle\Domain\Coffee\CoffeeService;

class GetAvailableCoffeesMenuUseCase
{
    /**
     * @var CoffeeService
     */
    private $coffeeService;

    /**
     * @param CoffeeService $coffeeService
     */
    public function __construct( CoffeeService $coffeeService)
    {
        $this->coffeeService = $coffeeService;
    }

    public function execute()
    {
        return $this->coffeeService->getAvailableCoffeeAndTopping();
    }
}