<?php

namespace tests\PlacementBundle\Application;

use PlacementBundle\Application\GetAvailableStudentsByBestFriendsHigherSalaryUseCase;
use PlacementBundle\Domain\Student\StudentService;
use PlacementBundle\Infrastructure\Persistence\InMemory\InMemoryStudentRepository;

class GetAvailableStudentsByBestFriendsHigherSalaryUseCaseTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var StudentService
     */
    private $studentsService;

    public function setUp()
    {
        $this->studentsService = new StudentService(
            new InMemoryStudentRepository()
        );
    }

    /**
     * @test
     */
    public function GetAvailableParticipantCollection()
    {
        $useCase = new GetAvailableStudentsByBestFriendsHigherSalaryUseCase(
            $this->studentsService
        );
        $arrayCollection = $useCase->execute();

        foreach ($arrayCollection as $result) {
            $this->assertArrayHasKey('name', $result);
            $this->assertArrayHasKey('id', $result);
        }
    }
}
