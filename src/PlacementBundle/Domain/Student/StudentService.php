<?php

namespace PlacementBundle\Domain\Student;

class StudentService
{
    /**
     * @var StudentRepository
     */
    private $studentRepository;

    /**
     * StudentService constructor.
     * @param StudentRepository $studentRepository
     */
    public function __construct($studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }

    public function getStudentsByBestFriendsHigherSalary()
    {
        return $this->studentRepository->getStudentsByBestFriendsHigherSalary();
    }
}
