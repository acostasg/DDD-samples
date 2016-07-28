<?php

namespace tests\PlacementBundle\Domain\Student;

use CoffeeShopBundle\Domain\Coffee\CoffeeRepository;
use CoffeeShopBundle\Domain\Coffee\CoffeeService;
use CoffeeShopBundle\Infrastructure\Persistence\InMemory\InMemoryCoffeeRepository;
use PlacementBundle\Domain\Student\StudentRepository;
use PlacementBundle\Domain\Student\StudentService;
use PlacementBundle\Infrastructure\Persistence\InMemory\InMemoryStudentRepository;

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
    public function getStudentsByBestFriendsHigherSalary()
    {
        $studentService = new CoffeeService(
            $this->coffeeRepository
        );
        $arrayCollection = $studentService->getAvailableCoffeeAndTopping();
        
        foreach ($arrayCollection as $result) {
            $this->assertInstanceOf('\CoffeeShopBundle\Domain\Coffee\Coffee',$result);
        }
    }
}
