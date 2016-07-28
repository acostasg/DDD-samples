<?php

namespace tests\PlacementBundle\Domain\Student;

use CoffeeShopBundle\Domain\Coffee\CoffeeRepository;
use CoffeeShopBundle\Domain\Coffee\CoffeeService;
use CoffeeShopBundle\Infrastructure\Persistence\InMemory\InMemoryCoffeeRepository;

class CoffeeServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var CoffeeRepository
     */
    private $coffeeRepository;

    public function setUp()
    {
        $this->coffeeRepository = new InMemoryCoffeeRepository();
    }

    /**
     * @test
     */
    public function getCoffeeMenuCollectionService()
    {
        $studentService = new CoffeeService(
            $this->coffeeRepository
        );
        $arrayCollection = $studentService->getAvailableCoffeeAndTopping();
        
        foreach ($arrayCollection as $result) {
            $this->assertInstanceOf('\CoffeeShopBundle\Domain\Coffee\Coffee',
                $result);
        }
    }
}
