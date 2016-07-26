<?php

namespace PlacementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PlacementBundle:Default:index.html.twig');
    }
}
