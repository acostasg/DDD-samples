<?php

namespace PlacementBundle\Controller;

use PlacementBundle\Application\GetAvailableStudentsByBestFriendsHigherSalaryUseCase;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        /** @var GetAvailableStudentsByBestFriendsHigherSalaryUseCase $studentsByFriendsHigherSalaryUseCase */
        $studentsByFriendsHigherSalaryUseCase =
            $this->get('application.studentBybestFriendsHigherSalary_usecase');

        $studentCollection = $studentsByFriendsHigherSalaryUseCase->execute();

        return $this->render('PlacementBundle:Default:index.html.twig', [
            'studentCollection' => $studentCollection
        ]);
    }
}
