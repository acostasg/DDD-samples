<?php

namespace tests\PlacementBundle\Domain\Student;

use PlacementBundle\Domain\Student\StudentRepository;
use PlacementBundle\Domain\Student\StudentService;
use PlacementBundle\Infrastructure\Persistence\InMemory\InMemoryStudentRepository;

class StudentServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var StudentRepository
     */
    private $studentRepository;

    public function setUp()
    {
        $this->studentRepository = new InMemoryStudentRepository();
    }

    /**
     * @test
     */
    public function getStudentsByBestFriendsHigherSalary()
    {
        $studentService = new StudentService(
            $this->studentRepository
        );
        $arrayCollection = $studentService->getStudentsByBestFriendsHigherSalary();

        foreach ($arrayCollection as $result) {
            $this->assertArrayHasKey('name', $result);
            $this->assertArrayHasKey('id', $result);
        }
    }
}
