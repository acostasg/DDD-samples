<?php

namespace PlacementBundle\Infrastructure\Persistence\InMemory;

use PlacementBundle\Domain\Student\StudentRepository;

class InMemoryStudentRepository implements StudentRepository
{

    private $rawData = [
        ['id' => 1, 'name' => 'Test'],
        ['id' => 2, 'name' => 'Test2'],
        ['id' => 3, 'name' => 'Test3'],
    ];


    /**
     *
     * @return array
     */
    public function getStudentsByBestFriendsHigherSalary()
    {
        return $this->rawData;
    }
}
