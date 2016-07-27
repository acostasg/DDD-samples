<?php

namespace PlacementBundle\Domain\Student;


interface StudentRepository
{
    public function getStudentsByBestFriendsHigherSalary();
}