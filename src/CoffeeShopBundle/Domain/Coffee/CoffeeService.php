<?php

namespace CoffeeShopBundle\Domain\Coffee;

class CoffeeService
{
    /**
     * @var CoffeeRepository
     */
    private $coffeeRepository;

    public function __construct(CoffeeRepository $coffeeRepository)
    {
        $this->coffeeRepository = $coffeeRepository;
    }

    public function getAvailableCoffeeAndTopping()
    {
        return $this->coffeeRepository->getAvailableCoffee();
    }
}
