<?php

namespace PlacementBundle\Infrastructure\Persistence\Doctrine;

use Doctrine\ORM\EntityRepository;
use PlacementBundle\Domain\Student\StudentRepository;

class DoctrineStudentRepository extends EntityRepository implements StudentRepository
{

    /**
     * SELECT student.name as name
     * FROM students as student
     * INNER JOIN friends as a ON student.id=a.id
     * INNER JOIN packages as packageStudent ON student.id=packageStudent.id
     * INNER JOIN students as bestfriend ON a.friend_id=bestfriend.id
     * INNER JOIN packages as packageBestFriend ON bestfriend.id=packageBestFriend.id
     * WHERE packageBestFriend.salary > packageStudent.salary
     * ORDER BY packageBestFriend.salary DESC;
     *
     * @return array
     */
    public function getStudentsByBestFriendsHigherSalary()
    {
        $studentCollection = $this->getEntityManager()->createQuery(
            'SELECT student.id, student.name
                FROM PlacementBundle:Students as student
                   JOIN PlacementBundle:Friends as a WITH  student.id=a.id
                   JOIN PlacementBundle:Packages as packageStudent WITH  student.id=packageStudent.id
                   JOIN PlacementBundle:Students as bestfriend WITH  a.friend_id=bestfriend.id
                   JOIN PlacementBundle:Packages as packageBestFriend WITH  bestfriend.id=packageBestFriend.id
                WHERE packageBestFriend.salary > packageStudent.salary
                ORDER BY packageBestFriend.salary DESC'
        );

        return $studentCollection->getResult();
    }
}
