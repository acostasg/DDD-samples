<?php

namespace CoffeShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CoffeShopBundle:Default:index.html.twig');
    }
}
