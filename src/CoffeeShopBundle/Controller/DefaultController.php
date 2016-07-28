<?php

namespace CoffeeShopBundle\Controller;

use CoffeeShopBundle\Application\GetAvailableCoffeesMenuUseCase;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        /** @var GetAvailableCoffeesMenuUseCase $coffeesMenuUseCase */
       $coffeesMenuUseCase =
            $this->get('application.coffees_menu_use_case');

        $coffeeCollection = $coffeesMenuUseCase->execute();

        return $this->render('CoffeShopBundle:Default:index.html.twig', [
            'coffeeCollection' => $coffeeCollection
        ]);
    }
}
