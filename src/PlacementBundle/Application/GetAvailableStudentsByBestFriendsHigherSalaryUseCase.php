<?php

namespace PlacementBundle\Application;

use PlacementBundle\Domain\Student\StudentService;

class GetAvailableStudentsByBestFriendsHigherSalaryUseCase
{
    /**
     * @var StudentService
     */
    private $studentsService;

    /**
     * GetAvailableStudentsByBestFriendsHigherSalaryUseCase constructor.
     * @param StudentService $studentService
     */
    public function __construct($studentService)
    {
        $this->studentsService = $studentService;
    }

    public function execute()
    {
        return $this->studentsService->getStudentsByBestFriendsHigherSalary();
    }
}
