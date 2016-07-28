<?php

namespace tests\PlacementBundle\Application;

use CoffeeShopBundle\Application\GetAvailableCoffeesMenuUseCase;
use CoffeeShopBundle\Domain\Coffee\CoffeeService;
use CoffeeShopBundle\Infrastructure\Persistence\InMemory\InMemoryCoffeeRepository;

class GetAvailableCoffeesUseCaseTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var CoffeeService
     */
    private $coffeeService;

    public function setUp()
    {
        $this->coffeeService = new CoffeeService(
            new InMemoryCoffeeRepository()
        );
    }

    /**
     * @test
     */
    public function GetAvailableMenuUseCaseCollection()
    {
        $useCase = new GetAvailableCoffeesMenuUseCase(
            $this->coffeeService
        );
        $arrayCollection = $useCase->execute();

        foreach ($arrayCollection as $result) {
            $this->assertInstanceOf('\CoffeeShopBundle\Domain\Coffee\Coffee', $result);
        }
    }
}
