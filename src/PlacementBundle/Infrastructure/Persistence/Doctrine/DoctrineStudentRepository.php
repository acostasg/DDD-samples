<?php

namespace PlacementBundle\Infrastructure\Persistence\Doctrine;


use Doctrine\ORM\EntityRepository;
use PlacementBundle\Domain\Student\StudentRepository;

class DoctrineStudentRepository extends EntityRepository implements StudentRepository
{

    public function getStudentsByBestFriendsHigherSalary()
    {
        $studentCollection = $this->findAll();
        return (array)$studentCollection;
    }
}